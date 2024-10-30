(function($) {

    Vue.component('cryptoid-shortcodes', {
        template: '#cryptoid-shortcodes-template',
        props: ['options'],
        data: function() {
            var data = {
                coin: 'BTCIDR',
                exchange: 'Indodax'
            };
            return data;
        },
        mounted: function() {

            var self = this;

            $('.form-select').selectize({
                persist: false,
                create: false,
                maxItems: 1,
                dropdownParent: 'body',
                onChange: function(value) {
                    var model = $(this.$input).attr('name');
                    self[model] = value;
                }
            });

            var cp = new ClipboardJS('.copy-btn');

        }
    });

    Vue.component('cryptoid-widgets', {
        template: '#cryptoid-widgets-template',
        props: ['options'],
        data: function() {
            var data = {
                type: 'card',
                design: 'price-slider',
                coin: 'BTCIDR',
                exchange: 'Indodax',
                theme: 'light',
                transparent: '',
                width: 480,
                height: 560,
                responsive: '',
                token: cryptoid.apitoken,
                sizes: {
                    card: {
                        'price-slider': { w: 480, h: 560 },
                        'simple-price': { w: 480, h: 150 },
                        'price-chart': { w: 480, h: 135 },
                        'price-icon': { w: 470, h: 135 },
                        'exchange-price': { w: 480, h: 145 },
                        'exchange-buy-sell': { w: 480, h: 226 },
                        'price-table': { w: 470, h: 406 },
                        'price-buy-sell-table': { w: 470, h: 375 },
                        'summary': { w: 800, h: 286 },
                        'price-strip': { w: 600, h: 82 },
                    },
                    ticker: {
                        default: { w: 1000, h: 36 }
                    },
                    table: {
                        default: { w: 1000, h: 520 }
                    },
                    chart: {
                        default: { w: 470, h: 570 }
                    },
                    button: {
                        default: { w: 350, h: 46 }
                    }
                }
            };
            return data;
        },
        watch: {
            type: function() {
                this.design = (this.type == 'card') ? 'price-slider' : 'default';
                this.width = this.sizes[this.type][this.design]['w'];
                this.height = this.sizes[this.type][this.design]['h'];
                this.apply();
            },
            design: function() {
                this.width = this.sizes[this.type][this.design]['w'];
                this.height = this.sizes[this.type][this.design]['h'];
            }
        },
        computed: {
            embedCode: function() {
                var code = '[cryptoid type="' + this.type + '" design="' + this.design + '" theme="' + this.theme + '" coin="' + this.coin + '"  width="' + this.width + '" height="' + this.height + '" responsive="' + this.responsive + '" transparent="' + this.transparent + '"]';
                return code;
            }
        },
        mounted() {

            var self = this;

            $('.form-select').selectize({
                persist: false,
                create: false,
                maxItems: 1,
                dropdownParent: 'body',
                onChange: function(value) {
                    var model = $(this.$input).attr('name');
                    self[model] = value;
                }
            });

            var cp = new ClipboardJS('#embedcodebtn');

            this.apply();

        },
        methods: {
            apply: function() {

                $('.cryptocurrency-id-widget').empty();
				$('.cryptocurrency-id-widget').css('margin', '0 auto').css('width', this.width + 'px');
				$('.cryptocurrency-id-widget').html(this.getIframe());

            },
            reset: function() {

            },
            getIframe: function() {
				var url = cryptoid.endpoint + 'embed/' + this.type + '/' + this.design + '?token=' + this.token + '&coin=' + this.coin + '&theme=' + this.theme + '&transparent=' + this.transparent;
				return '<iframe scrolling="no" allowtransparency="true" frameborder="0" src="' + url + '" style="box-sizing: border-box; height: calc(' + this.height + 'px); width: ' + this.width + 'px;"></iframe>';
			},
            copyEmbedCode: function() {

            }
        }
    });

    var app = new Vue({
        el: '.vue-component',
        props: {
            options: Object
        }
    });

})( jQuery );