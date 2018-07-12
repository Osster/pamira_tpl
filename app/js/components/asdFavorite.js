$(document).ready(function(){

	var wlist = localStorage.getItem('WLIST') || '[]';

	var favBtns = $('.add-to-fav');

	if (favBtns.length > 0) {
        favBtns.on('click', function () {
			$that = $(this);
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
                    url: $that.data('url')
				});
                $that.addClass('checked');
			}
            localStorage.setItem('WLIST', JSON.stringify(wlist));
            listRefresh();
        });

        if (typeof wlist != 'undefined') {
            wlist = JSON.parse(wlist);

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

    listRefresh();

});