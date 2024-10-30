<div class="wrap cid-editor-container">
    <div class="crypto-edit">
        <div class="vue-component">
            <cryptoid-widgets :options='<?php echo htmlspecialchars(json_encode($config), ENT_QUOTES, 'UTF-8'); ?>'></cryptoid-widgets>
        </div>
    </div>
</div>

<template id="cryptoid-widgets-template">

    <div class="container sm">
				
        <div id="cid-editor" class="cid-editor cid-widget">

            <h1>Widget Editor</h1>

            <div class="cid-panel">
                <div class="cid-panel-title">Pilih Widget</div>
                <div class="cid-panel-body">
                    <div class="cid-w-s">
                        <label for="widget-type-card" class="cid-w" :class="{ 'active': type=='card' }">
                            <input type="radio" name="type" id="widget-type-card" v-model="type" value="card">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                            <g>
                                <path d="M0,180.69c0.26-0.39,0.66-0.75,0.77-1.18c6.05-25.17,23.25-38.86,48.89-38.86c58.75,0,117.49,0,176.24,0
                                    c55,0,110.01-0.12,165.01,0.05c25.53,0.08,46.49,20.52,46.55,45.63c0.17,73.56,0.14,147.12-0.01,220.68
                                    c-0.04,21.49-15.05,40.22-35.95,44.74c-6.74,1.46-13.89,1.36-20.85,1.37c-110.82,0.08-221.64,0.07-332.47,0.04
                                    c-23.84,0-42.14-14.76-47.25-37.89c-0.16-0.75-0.61-1.43-0.92-2.15C0,335.65,0,258.17,0,180.69z M49.81,171.9
                                    c-12.59,0-18.53,5.93-18.53,18.51c0,70.96,0,141.93,0,212.89c0,12.7,5.78,18.59,18.39,18.59c113.11,0.02,226.23,0.02,339.34,0.01
                                    c11,0,17.25-6.24,17.26-17.25c0.02-71.78,0.02-143.56,0-215.33c0-11.24-6.23-17.41-17.6-17.41c-56.8-0.02-113.6-0.01-170.4-0.01
                                    C162.11,171.9,105.96,171.9,49.81,171.9z"/>
                                <path d="M500,86.94c-0.77-2.63-1.46-5.28-2.32-7.87c-6.47-19.6-24.32-32.15-45.86-32.16c-105.46-0.02-210.92-0.03-316.38,0.03
                                    c-11.37,0.01-22.89-0.58-34.08,0.98c-21.98,3.07-38.1,22.17-38.78,44.3c-0.17,5.51-0.03,11.02-0.03,16.87c10.42,0,20.56,0,31.23,0
                                    c0-4.6-0.02-9.11,0-13.62c0.06-10.95,6.34-17.3,17.26-17.3c85.61-0.01,171.21,0,256.82,0c27.67,0,55.33,0.01,83,0
                                    c11.87,0,17.91,6.09,17.91,18.07c-0.01,85.12-0.01,170.24-0.01,255.36c0,1.29,0,2.57,0,4.61c8.82-3.2,16.29-7.72,20.97-15.07
                                    c4.28-6.71,6.91-14.47,10.27-21.76C500,241.89,500,164.42,500,86.94z"/>
                            </g>
                            </svg>
                            <div class="cid-w-name">Card</div>
                        </label>
                        <label for="widget-type-ticker" class="cid-w" :class="{ 'active': type=='ticker' }">
                            <input type="radio" name="type" id="widget-type-ticker" v-model="type" value="ticker">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                            <g>
                                <path d="M499.97,250.07c0,57.83,0,115.65,0,173.48c0,22.53-19.71,33.98-39.23,22.86c-19.29-10.99-40.61-15.95-62.11-19.92
                                    c-65.45-12.1-131.52-13.95-197.82-11c-40.23,1.79-80.27,5.64-119.37,15.72c-15.03,3.87-29.81,9.19-44.13,15.21
                                    c-19.29,8.11-37.24-2.79-37.25-23.84C0,321.96,0.03,221.35,0.03,120.74c0-15.04-0.08-30.09,0.02-45.13
                                    c0.14-20.9,18.72-32.28,37.46-23.12c24.65,12.04,51.13,17.84,77.95,22.13c70.77,11.31,141.95,12.02,213.23,6.77
                                    c36.8-2.71,73.45-7.19,108.83-18.45c8.32-2.65,16.47-6.11,24.24-10.11c18.75-9.65,38.1,1.45,38.15,22.6
                                    C500.07,133.64,499.97,191.85,499.97,250.07z M35,400.86c71.44-19.53,143.96-24.94,217.06-24.86
                                    c73.07,0.09,145.54,5.89,216.94,24.84c0-100.28,0-199.7,0-298.43c-144.87,32.48-289.44,33.65-434,0C35,201.27,35,300.69,35,400.86z
                                    "/>
                            </g>
                            </svg>
                            <div class="cid-w-name">Ticker</div>
                        </label>
                        <label for="widget-type-table" class="cid-w" :class="{ 'active': type=='table' }">
                            <input type="radio" name="type" id="widget-type-table" v-model="type" value="table">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                            <g>
                                <path d="M249.97,29.5c53.26,0,106.53-0.06,159.79,0.01c51.73,0.07,90.08,38.27,90.16,90.07c0.13,87.03,0.1,174.06-0.02,261.09
                                    c-0.06,44.06-28.63,79.22-71.42,88.1c-5.8,1.2-11.84,1.71-17.78,1.71c-106.99,0.1-213.98,0.19-320.96,0.02
                                    c-43.21-0.07-77.77-27.43-87.41-68.78c-1.45-6.2-2.18-12.71-2.19-19.08c-0.14-88.41-0.18-176.82-0.06-265.22
                                    c0.07-48.68,38.56-87.55,87.35-87.84C141.6,29.25,195.79,29.5,249.97,29.5z M29.86,235.38c0,29.68,0,58.68,0,87.61
                                    c68.64,0,136.73,0,204.93,0c0-29.43,0-58.43,0-87.61C166.3,235.38,98.37,235.38,29.86,235.38z M234.91,118.23
                                    c-68.8,0-136.86,0-205.57,0c0,2.77,0,5.02,0,7.26c-0.01,24.34,0.22,48.68-0.17,73.02c-0.1,6.35,2.06,7.53,7.87,7.52
                                    c63.82-0.19,127.65-0.12,191.47-0.14c2,0,4.01-0.25,6.41-0.42C234.91,176.27,234.91,147.47,234.91,118.23z M469.82,205.57
                                    c0-29.61,0-58.42,0-87.47c-68.49,0-136.52,0-204.67,0c0,29.37,0,58.35,0,87.47C333.53,205.57,401.38,205.57,469.82,205.57z
                                    M470.1,235.75c-68.87,0-137.06,0-205.11,0c0,29.4,0,58.23,0,87.11c68.57,0,136.77,0,205.11,0
                                    C470.1,293.64,470.1,264.98,470.1,235.75z M234.82,440.88c0-29.55,0-58.53,0-87.73c-68.59,0-136.65,0-205.5,0
                                    c0,9.8-0.13,19.16,0.02,28.51c0.56,33.76,25.97,59,59.68,59.2c22.73,0.13,45.47,0.02,68.2,0.02
                                    C182.7,440.88,208.18,440.88,234.82,440.88z M470.98,353.25c-69.9,0-137.93,0-205.92,0c0,29.4,0,58.24,0,87.18
                                    c1.31,0.18,2.19,0.42,3.07,0.42c48.9,0,97.8,0.34,146.7-0.19c25.54-0.28,48.55-19.2,53.5-44.6
                                    C471.01,382.29,470.19,367.84,470.98,353.25z"/>
                            </g>
                            </svg>
                            <div class="cid-w-name">Table</div>
                        </label>
                        <label for ="widget-type-button" class="cid-w" :class="{ 'active': type=='button' }">
                            <input type="radio" name="type" id="widget-type-button" v-model="type" value="button">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                            <g>
                                <path d="M500,320.9c-2.43,9.85-5.93,19.2-12.55,27.12c-11.82,14.13-26.53,22.14-45.33,21.75c-7.4-0.15-14.81-0.03-23.77-0.03
                                    c8.24,6.42,14.06,13.05,10.47,22.66c-3.53,9.47-12.69,10.56-22.22,11.91c6.53,8.65,12.69,16.54,18.5,24.67
                                    c1.83,2.55,3.5,5.65,3.91,8.68c0.92,6.85-1.13,12.79-7.31,16.86c-8.28,5.45-16.43,11.11-24.68,16.6
                                    c-8.88,5.91-19.71,3.35-25.07-5.94c-6.39-11.1-12.7-22.24-19.54-34.23c-3.74,3.86-7.08,7.3-10.42,10.75
                                    c-4.77,4.94-10.57,7.4-17.19,5.25c-6.77-2.2-10.09-7.66-11.26-14.63c-3.3-19.55-6.73-39.07-10.12-58.6
                                    c-0.22-1.25-0.58-2.48-0.94-3.99c-5.67,0-11.18,0-16.69,0c-76.29,0-152.58-0.41-228.86,0.21c-27.07,0.22-50.13-19.79-55.82-44.87
                                    c-0.32-1.41-0.74-2.79-1.11-4.19c0-51.44,0-102.87,0-154.31c0.71-2.64,1.36-5.3,2.13-7.92c6.58-22.48,28.19-38.92,51.71-38.93
                                    c130.13-0.06,260.25-0.07,390.38,0c26.61,0.01,49.22,18.57,54.92,44.61c0.17,0.78,0.57,1.5,0.86,2.25
                                    C500,218.03,500,269.46,500,320.9z M294.46,336.88c0.08-1.1,0.2-1.54,0.12-1.94c-2.84-15.44-5.66-30.88-8.59-46.3
                                    c-1.46-7.66,0.93-14.49,6.4-17.58c5.32-3,13.22-1.64,19.22,3.45c23.36,19.79,46.66,39.63,70.07,59.38
                                    c1.59,1.34,3.82,2.83,5.77,2.86c15.07,0.22,30.16,0.44,45.22-0.02c17.16-0.52,28.75-10.95,30.43-27.11
                                    c0.7-6.7,0.38-13.51,0.38-20.27c0.03-35.55,0.05-71.1,0.01-106.65c-0.02-14.72-7.39-25.03-20.79-28.56
                                    c-4.33-1.14-9-1.59-13.51-1.59c-87.41-0.09-174.83-0.07-262.24-0.07c-33.5,0-67.01-0.07-100.51,0.03
                                    c-20.03,0.06-31.74,10.2-31.88,28.55c-0.31,42.02-0.34,84.05,0.01,126.08c0.15,18.68,12.82,29.73,32.61,29.73
                                    c65.79,0.02,131.58,0.02,197.37,0.02C274.44,336.89,284.31,336.88,294.46,336.88z M401.09,430.96c-1.28-1.75-2.18-3.03-3.12-4.28
                                    c-6.61-8.74-13.27-17.44-19.83-26.22c-5.25-7.03-2.69-14,5.8-15.93c4.28-0.97,8.59-1.78,13.77-2.84
                                    c-26.92-24.19-53.22-47.82-79.51-71.46c-0.28,0.16-0.55,0.31-0.83,0.47c6.01,34.46,12.03,68.93,18.28,104.78
                                    c4.34-4.59,7.73-8.3,11.26-11.86c6.65-6.7,13.02-5.53,17.61,2.78c6.53,11.83,13.32,23.52,20.19,35.6
                                    C390.22,438.29,395.44,434.77,401.09,430.96z"/>
                            </g>
                            </svg>
                            <div class="cid-w-name">Button</div>
                        </label>
                        <label for="widget-type-chart" class="cid-w" :class="{ 'active': type=='chart' }">
                            <input type="radio" name="type" id="widget-type-chart" v-model="type" value="chart">
                            <svg style="enable-background:new 0 0 24 24;max-width: 80px;" version="1.1" viewBox="0 0 24 24" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="info"/><g id="icons"><g id="chart"><path d="M18.7,14h-6.2c-1.4,0-2.6-1.2-2.6-2.6V5.3C10,4.5,9.4,3.9,8.6,4C3.1,4.8-1,10,0.2,16C0.9,19.9,4.1,23,8,23.8    c5.9,1.2,11.2-2.9,12-8.4C20.1,14.6,19.5,14,18.7,14z"/><path d="M24,10.6c-0.3-2.7-1.5-5.2-3.5-7.2c-1.9-1.9-4.5-3.2-7.2-3.5C12.6-0.1,12,0.5,12,1.2V11c0,0.6,0.5,1,1,1h9.8    C23.5,12,24.1,11.4,24,10.6z"/></g></g></svg>
                            <div class="cid-w-name">Chart</div>
                        </label>
                    </div>
                </div>
            </div>

            <div class="cid-panel">
                <div class="cid-panel-title">Preview</div>
                <div class="cid-panel-body cid-preview">
                    <div class="cryptocurrency-id-widget-container">
                        <div class="cryptocurrency-id-widget"></div>
                    </div>
                </div>
                <div class="cid-panel-body">

                    <div class="d-flex">
                        <div class="flex mr-10" v-show="type=='card'">
                            <div class="form-group">
                                <label for="" class="form-label">Design</label>
                                <select name="design" id="" class="form-select" v-model="design">
                                    <option value="price-slider">Price Slider</option>
                                    <option value="simple-price">Simple Price</option>
                                    <option value="price-chart">Price Chart</option>
                                    <option value="price-icon">Price Icon</option>
                                    <option value="exchange-price">Exchange Price</option>
                                    <option value="exchange-buy-sell">Exchange Buy Sell</option>
                                    <option value="price-table">Price Table</option>
                                    <option value="price-buy-sell-table">Price Buy Sell Table</option>
                                    <option value="summary">Summary</option>
                                    <option value="price-strip">Price Strip</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex mr-10">
                            <div class="form-group">
                                <label for="" class="form-label">Cryptocurrency</label>
                                <select name="coin" id="" class="form-select" v-model="coin">
                                    <option value="BTCIDR">Bitcoin</option>
                                    <option value="ETHIDR">Ethereum</option>
                                    <option value="XRPIDR">Ripple</option>
                                    <option value="LTCIDR">Litecoin</option>
                                    <option value="DOGEIDR">Doge</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="flex mr-10">
                            <div class="form-group mb-0">
                                <label for="" class="form-label">Color Theme</label>
                                <select name="theme" id="" class="form-select" v-model="theme">
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                                <label for="cid-trans-bg" class="form-checkbox mt-20">
                                    <input type="checkbox" name="transparent" id="cid-trans-bg" v-model="transparent" value="true">
                                    <span>Transparent Background</span>
                                </label>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="form-group mb-0">
                                <label for="" class="form-label">Size</label>
                                <div class="d-flex">
                                    <input type="text" name="width" class="form-control mr-10" v-model="width" placeholder="W">
                                    <input type="text" name="height" class="form-control" v-model="height" placeholder="H">
                                </div>
                                <label for="cid-responsive" class="form-checkbox mt-20">
                                    <input type="checkbox" name="responsive" v-model="responsive" value="true" id="cid-responsive">
                                    <span>Autosize</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cid-panel-footer">
                    <div class="d-flex justify-start">
                        <div v-on:click="apply()" class="cid-btn cid-btn-primary">Apply</div>
                        <div v-on:click="reset()" class="cid-btn">Reset</div>
                    </div>
                </div>
            </div>

            <div class="cid-panel">
                <div class="cid-panel-title">Shortcode</div>
                <div class="cid-panel-body">
                    <div class="form-group">
                        Tempel shortcode ini di halaman, pos atau widget untuk menampilkan widget.
                    </div>
                    <div class="form-group mb-0">
                        <div class="cid-embed-code">
                            <code id="embedcode">{{ embedCode }}</code>
                        </div>
                    </div>
                </div>
                <div class="cid-panel-footer">
                    <div class="d-flex justify-start">
                        <div id="embedcodebtn" data-clipboard-target="#embedcode" class="cid-btn cid-btn-primary">Copy</div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</template>