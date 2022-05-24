<header class="d-flex align-items-center">
    <img src="<?php echo __DIR__ . '/../assets/img/spotify-logo.png' ?>" alt="logo" class="" />

    <div class="search_div d-flex align-items-center">

        <select class="custom-select form-control me-2 w-50">
            <option value="1">Search by Album -></option>
            <option value="2">Search by Band -></option>
            <option value="3">Search by Year -></option>
            <option value="4">Search by Genre -></option>
        </select>

        <form class="d-flex align-items-center w-50">

            <input type="search" class="form-control" placeholder="Type here" />

        </form>

    </div>
</header>

<?php 
var_dump(__DIR__ . '/../assets/css/style.css');

?>