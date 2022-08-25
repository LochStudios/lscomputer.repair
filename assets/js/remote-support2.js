function setupElement645984591590198072() {
    var requireFunc = window.platformElementRequire || window.require;

    // Relies on a global require, specific to platform elements
    requireFunc([
        'w-global',
        'underscore',
        'jquery',
        'backbone',
        'util/platform/elements/PlatformElement',
        'util/platform/elements/PlatformElementSettings'
    ], function(
        _W,
        _,
        $,
        Backbone,
        PlatformElement,
        PlatformElementSettings
    ) {
        var dependencies = null || [];
        var platform_element_id = "325178514791279925-1.2.7";

        if (typeof _W.loadedPlatformDependencies === 'undefined') {
            _W.loadedPlatformDependencies = [];
        }

        if (typeof _W.platformElements === 'undefined') {
            _W.platformElements = [];
        }

        if (typeof _W.platformElements[platform_element_id] === 'undefined') {
            _W.platformElements[platform_element_id] = {};
            _W.platformElements[platform_element_id].deferredObject = new $.Deferred();
            _W.platformElements[platform_element_id].deferredPromise = _W.platformElements[platform_element_id].deferredObject.promise();
        }

        if(_.intersection(_W.loadedPlatformDependencies, dependencies).length !== dependencies.length){
            _.reduce(dependencies, function(promise, nextScript){
                _W.loadedPlatformDependencies.push(nextScript);
                return promise.then(function(){
                    return $.getScript(nextScript);
                });
            }, $().promise()).then(function(){
                _W.platformElements[platform_element_id].deferredObject.resolve();
            });
        }

        if (dependencies.length === 0){
            _W.platformElements[platform_element_id].deferredObject.resolve();
        }

        _W.platformElements[platform_element_id].deferredPromise.done(function(){
            var _ElementDefinition = /**
 * This is required for element rendering to be possible
 * @type {PlatformElement}
 *
 * we normalize the styles on initial load.
 */

(function() {
    var PricingTable = PlatformElement.extend({
        initialize: function() {
            this.fixStyles();
        },
        // normalizes the styles of all element children.
        fixStyles: function() {
            this.$('li.wsite-text').each(function(index, value) {
                var $value = $(value);
                var defaultText = $value.data('default-text');
                var $el = $(value).find('.editable-text');
                if ($el.text() === defaultText) {
                    $el.attr('style', '');
                }
            });

            this.$('.element').each(function(index) {
                $(this).attr('style', '');
            });
        }
    });

    return PricingTable;
})();;

            if (typeof _ElementDefinition == 'undefined' || typeof _ElementDefinition == 'null') {
                var _ElementDefinition = PlatformElement.extend({});
            }

            var _Element = _ElementDefinition.extend({
                initialize: function() {
                    // we still want to call the initialize function defined by the developer
                    // however, we don't want to call it until placeholders have been replaced
                    this.placeholderInterval = setInterval(function() {
                        // so use setInterval to check for placeholders.
                        if (this.$('.platform-element-child-placeholder').length == 0) {
                            clearInterval(this.placeholderInterval);
                            this.constructor.__super__.initialize.apply(this);
                        }
                    }.bind(this), 100);
                }
            });

            _Element.prototype.settings = new PlatformElementSettings({"plans_each":[{"plans_index":0},{"plans_index":1},{"plans_index":2}],"features_each":[{"features_index":0}],"plans":3,"features":1,"location":"Bottom","alignment":"center","currency":"'$'","titleColor":"#ffffff","backgroundColor":"#ffffff","numberColor":"#ffffff","borderColor":"#ffffff"});
            _Element.prototype.settings.page_element_id = "645984591590198072";

            _Element.prototype.element_id = "43c5d8d2-8d93-4ffa-9835-cc80d5062094";
            _Element.prototype.user_id = "24731344";
            _Element.prototype.site_id = "304093146912344906";
            _Element.prototype.assets_path = "//marketplace.editmysite.com/uploads/b/marketplace-elements-325178514791279925-1.2.7/assets/";
            new _Element({
                el: '#element-price-table'
            });
        });
    });

}

if (typeof document.documentElement.appReady == 'undefined') {
    document.documentElement.appReady = 0;
}

if (document.documentElement.appReady || (window.inEditor && window.inEditor())) {
    setupElement645984591590198072();
} else if (document.createEvent && document.addEventListener) {
    document.addEventListener('appReady', setupElement645984591590198072, false);
} else {
    document.documentElement.attachEvent('onpropertychange', function(event){
        if (event.propertyName == 'appReady') {
            setupElement645984591590198072();
        }
    });
}