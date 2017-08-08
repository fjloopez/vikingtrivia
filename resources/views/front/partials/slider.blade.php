<div class="slider">
    <div id="slider">
        <div class="container_slider">
                <img class="slider_img" src="{{ asset("/images/slider/weapons-example.png") }}" />
                <img class="slider_img" src="{{ asset("/images/slider/weapons-example-correct.png") }}" />
                <img class="slider_img" src="{{ asset("/images/slider/example.png") }}" />
        </div>
    </div>
    <div class="container_slider_buttons">
        <button type="button" class="left" onclick="plusDivs(-1)">&#10094;</button>
        <button type="button" class="right" onclick="plusDivs(1)">&#10095;</button>
    </div>
</div>

<script type="text/javascript" src="/js/slider.js"></script>