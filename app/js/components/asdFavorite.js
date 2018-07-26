$(document).ready(function(){

	var wlist = localStorage.getItem('WLIST') || '[]';

	var favBtns = $('.add-to-fav');

    if (typeof wlist != 'undefined') {
        //console.log('wlist', wlist);
        wlist = JSON.parse(wlist);
        //console.log('wlist', wlist);

        wlist.map(function (item) {
            if (item !== null) {
                var btn = $(document).find('.add-to-fav[data-id="' + item.id + '"]');
                if(btn.length > 0) {
                    btn.addClass('checked');
                }
            }
        });

    } else {
        localStorage.setItem('WLIST', JSON.stringify([]));
        wlist = [];
    }


    if (favBtns.length > 0) {
        favBtns.on('click', function () {
			$that = $(this);
            console.log($that);
			if (itemIsFav(wlist, $that.data('id'))) {
                wlist.map(function (item, k) {
					if (item !== null && item.id == $that.data('id')) {
						delete wlist[k];
                        return;
					}
                });
                wlist = wlist.filter(function (item) {
					return item !== null;
                });
                $that.removeClass('checked');
			} else {
                wlist.push({
					id: $that.data('id'),
                    name: $that.data('name'),
                    pic: $that.data('pic'),
                    url: $that.data('url'),
                    price: $that.data('price')
				});
                $that.addClass('checked');
			}
            localStorage.setItem('WLIST', JSON.stringify(wlist));
            listRefresh();
        });
    }
	var itemIsFav = function (wlist, id) {
		var exists = false;
        wlist.map(function (item) {
			if(item !== null && item.id == id) {
                exists = true;
                return;
			}
        });
        return exists;
    }

    var listRefresh = function () {
		var $fList = $('.favorite-list');
        var wlist = localStorage.getItem('WLIST') || '[]';
        if ($fList.length > 0) {
            $.get('/ajax/wish_list.php', { wlist: wlist }, function (resp) {
                $fList.html(resp);
            });
		}
    }

    $(document).on('click', '.wish-list-item-delete', function () {
        var itemId = parseInt($(this).data('id'));
        var isDeleted = false;
        if (itemId > 0) {
            wlist.every(function (item, k) {
                if (item !== null && item.id == itemId) {
                    delete wlist[k];
                    isDeleted = true;
                    return false;
                }
                return true;
            });
        }
        if (isDeleted) {
            wlist = wlist.filter(function (item) {
                return item !== null;
            });

            if (favBtns.length > 0) {
                var favBtn = $(document).find('.add-to-fav[data-id="' + itemId + '"]');
                if (favBtn) {
                    favBtn.removeClass('checked');
                }
            }

            localStorage.setItem('WLIST', JSON.stringify(wlist));
            listRefresh();
        }
    });

	BX.ready(function () {
        $(document).on('click', '.wish-list-item-add-to-cart', function () {
            var itemId = parseInt($(this).data('id'));
            if (itemId > 0) {
                wlist.every(function (item, k) {
                    if (item !== null && item.id == itemId) {
                        $.ajax({
                            type: "GET",
                            url: '/tehnika/?action=ADD2BASKET&ajax_basket=Y&id=' + itemId,
                            dataType: "html",
                            success: function(out){
                                var resp = JSON.parse(out);
                                if (resp.STATUS == 'OK') {
                                    $(document).find('.wish-list-item-delete[data-id="' + itemId + '"]').trigger('click');
                                    BX.onCustomEvent('OnBasketChange');
                                }
                            }

                        });
                        return false;
                    }
                    return true;
                });
            }

        });
    });

    listRefresh();

});