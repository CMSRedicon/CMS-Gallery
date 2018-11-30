/**
 * Główny wątek, ekwiwalent document.ready
 */
; (function () {

    var helper = new Helpers.Main();
    var slug = new Slug.Main();

    helper.dump("CMS Redicon Articles 2018");

    //Custom trigger dla cmsr
    if ($('[data-cmsr-trigger]').length > 0) {

        $('[data-cmsr-trigger]').each(function ($key, $item) {

            if (typeof $(this).data(helper.CMSR_TRIGGER) != typeof undefined) {
                let action = $(this).data(helper.CMSR_TRIGGER);
                //główny switch dla wszystkich trigerów
                switch (action) {
                    case 'sendArticleVisibility':
                        $(this).click(function () {
                            helper.sendArticleVisibility($(this));
                        });
                        break;

                    case 'clickArticleLangCreate':
                        $(this).click(function (e) {
                            e.preventDefault();
                            if (confirm("Czy napewno chcesz opuścić stronę ? Nie zapisane dane zostaną utracone")) {
                                window.location.href = $(this).attr('href');
                            }
                        });
                        break;

                    case 'addBeforUnload':
                        window.onbeforeunload = function () {
                            return "Nie zapisane dane zostaną utracone. Napewno chcesz opuścić stronę ?";
                        }
                        break;
                    case 'updateSlugArticle':
                        $(this).keyup(function () {
                            if ($('#articles_seo_slug').length > 0) {
                                let articleSeoSlug = $('#articles_seo_slug');
                                if (typeof $(this).val() != undefined && $(this).val() != null && $(this).val() != "") {
                                    let choosedLang = articleSeoSlug.data('choosed-lang');
                                    let slugText = slug.slug($(this).val(), '-');
                                    articleSeoSlug.val('/' + choosedLang + '/' + slugText);
                                } else {
                                    articleSeoSlug.val('');
                                }
                            }
                        });

                        break;
                }
            }
        });
    }

})();
