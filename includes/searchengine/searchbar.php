<div class="col-sm-1 col-md-1">
    <form class="navbar-form navbar-left " role="form" method="POST" action="" id = "search" name = "search">
        <div class="form-group ">
            <div class="col-sm-12">
                <input id="searchengine" type="searchengine" class="form-control"  placeholder = "Search for shop" value="" size="30" name = "search_text" onkeyup="showResult(this.value)" autocomplete="off" />
            </div>
        </div>
    </form>
</div>

<?php require_once 'includes/searchengine/searchfunction.php'; ?>