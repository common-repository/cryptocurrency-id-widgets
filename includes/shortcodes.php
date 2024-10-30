<div class="wrap cid-editor-container">
    <h2><?php _e('Shortcodes', 'cryptoid-widgets'); ?></h2>
    <div class="crypto-edit">
        <p>Salin dan tempel shortcode ini untuk menampilkan informasi harga dan lainnya di suatu laman, post, atau di manapun</p>
        <div class="vue-component">
            <cryptoid-shortcodes></cryptoid-shortcodes>
        </div>
    </div>
</div>

<template id="cryptoid-shortcodes-template">

    <div class="cid-shortcodes cid-editor cid-widget">

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <div class="d-flex">
                    <div class="form-group w-50 mb-0 mr-10">
                        <label for="" class="form-label">Cryptocurrency</label>
                        <select name="coin" class="form-select" v-model="coin">
                            <option value="BTCIDR">Bitcoin</option>
                            <option value="ETHIDR">Ethereum</option>
                            <option value="XRPIDR">Ripple</option>
                            <option value="LTCIDR">Litecoin</option>
                            <option value="DOGEIDR">Doge</option>
                        </select>
                    </div>
                    <div class="form-group w-50 mb-0">
                        <label for="" class="form-label">Exchange</label>
                        <select name="exchange" class="form-select" v-model="exchange">
                            <option value="Indodax">Indodax</option>
                            <option value="Luno">Luno</option>
                            <option value="Rekeningku">Rekeningku</option>
                            <option value="Trivpro">Trivpro</option>
                            <option value="Bitocto">Bitocto</option>
                            <option value="Tokocrypto">Tokocrypto</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan harga pasangan cryptocurrency</p>
                <div class="short-code"><span id="shortcode1">[cryptoid type="text" pair="{{ coin }}" info="price"]</span> <span data-clipboard-target="#shortcode1" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan perbedaan harga dalam 24 jam</p>
                <div class="short-code"><span id="shortcode2">[cryptoid type="text" pair="{{ coin }}" info="diff"]</span> <span data-clipboard-target="#shortcode2" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan perbedaan harga dalam 24 jam dalam persentase</p>
                <div class="short-code"><span id="shortcode3">[cryptoid type="text" pair="{{ coin }}" info="perc"]</span> <span data-clipboard-target="#shortcode3" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan harga terakhir dari pair dan persentase</p>
                <div class="short-code"><span id="shortcode4">[cryptoid type="text" pair="{{ coin }}" exchange="{{ exchange }}" info="last"]</span> <span data-clipboard-target="#shortcode4" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan harga buka pada exchange</p>
                <div class="short-code"><span id="shortcode5">[cryptoid type="text" pair="{{ coin }}" exchange="{{ exchange }}" info="open"]</span> <span data-clipboard-target="#shortcode5" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan harga tertinggi dalam 24 jam di exchange</p>
                <div class="short-code"><span id="shortcode6">[cryptoid type="text" pair="{{ coin }}" exchange="{{ exchange }}" info="high"]</span> <span data-clipboard-target="#shortcode6" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan harga terendah dalam 24 jam di exchange</p>
                <div class="short-code"><span id="shortcode7">[cryptoid type="text" pair="{{ coin }}" exchange="{{ exchange }}" info="low"]</span> <span data-clipboard-target="#shortcode7" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan volume cryptocurrency dalam 24 jam</p>
                <div class="short-code"><span id="shortcode8">[cryptoid type="text" pair="{{ coin }}" exchange="{{ exchange }}" info="volume"]</span> <span data-clipboard-target="#shortcode8" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan harga beli di exchange</p>
                <div class="short-code"><span id="shortcode9">[cryptoid type="text" pair="{{ coin }}" exchange="{{ exchange }}" info="buy"]</span> <span data-clipboard-target="#shortcode9" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-30">
            <div class="cid-panel-body">
                <p>Dapatkan harga jual di exchange</p>
                <div class="short-code"><span id="shortcode10">[cryptoid type="text" pair="{{ coin }}" exchange="{{ exchange }}" info="sell"]</span> <span data-clipboard-target="#shortcode10" class="copy-btn">Copy</span></div>
            </div>
        </div>

        <div class="cid-panel mb-0">
            <div class="cid-panel-body">
                <p>Dapatkan waktu update terakhir</p>
                <div class="short-code"><span id="shortcode11">[cryptoid type="text" pair="{{ coin }}" exchange="{{ exchange }}" info="lastupdate"]</span> <span data-clipboard-target="#shortcode11" class="copy-btn">Copy</span></div>
            </div>
        </div>

    </div>

</template>