<div class="container-fluid mt--6" style="overflow-x:scroll">
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0 text-dark">Pohon Generasi</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body alert-wrapper-gen">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="search_username" id="search_username" placeholder="Cari Username Agen...">
                        <div class="input-group-append">
                            <button class="btn btn-info" id="btn_search_username"><i class="fa fa-search"></i></button>
                        </div>
                    </div>

                    <div class="generations" data-url="" data-levels="0"></div>
                    <br />
                    <hr style="margin-top: 0;" />
                    <a href="javascript:;" class="btn btn-info loadmore"><i class="fa fa-refresh"></i> Tampilkan Lebih...</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var generations = document.querySelector(".generations");
        var loadMoreBtn = document.querySelector(".loadmore");

        function loadMoreGenerations() {
            // Lakukan logika untuk memuat lebih banyak generasi di sini
            console.log("Load more generations...");
        }

        loadMoreBtn.addEventListener("click", loadMoreGenerations);
    });
</script>
