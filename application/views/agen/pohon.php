<div class="card-body alert-wrapper-gen">
    <div class="input-group mb-2">
        <input type="text" class="form-control" name="search_username_gen" id="search_username_gen" placeholder="Cari Username Agen...">
        <div class="input-group-append">
            <button class="btn btn-info" id="btn_search_username_gen"><i class="fa fa-search"></i></button>
        </div>
    </div>

    <div class="generations">
        <div id="generation-10" class="treeview">
            <ul class="list-group">
                <?php foreach ($agen as $agent) : ?>
                    <li class="list-group-item node-generation-10 agent-item" data-nodeid="<?= $agent->id ?>" data-sponsor="<?= $agent->usernameSponsor ?>">
                        <span class="icon expand-icon fa fa-plus"></span>
                        <span class="icon node-icon fa fa-user"></span>
                        <strong style="font-size:13px"><?= $agent->username ?></strong>
                        <small>(<?= $agent->usernameSponsor ?>)</small>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <br>
    <hr style="margin-top: 0;">
    <a href="javascript:;" class="btn btn-info loadmore"><i class="fa fa-refresh"></i> Tampilkan Lebih...</a>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.agent-item').on('click', function() {
            var sponsor = $(this).data('sponsor');
            $.ajax({
                url: '/agen/get_agents_by_sponsor/' + sponsor,
                method: 'GET',
                success: function(data) {
                    var agents = JSON.parse(data);
                    agents.forEach(function(agent) {
                        $('.list-group').append(
                            `<li class="list-group-item node-generation-10 agent-item" data-nodeid="${agent.id}" data-sponsor="${agent.usernameSponsor}">
                                <span class="icon expand-icon fa fa-plus"></span>
                                <span class="icon node-icon fa fa-user"></span>
                                <strong style="font-size:13px">${agent.username}</strong>
                                <small>${agent.usernameSponsor}</small>
                            </li>`
                        );
                    });
                }
            });
        });
    });

    document.addEventListener("DOMContentLoaded", function() {
        var loadMoreBtn = document.querySelector(".loadmore");

        function loadMoreGenerations() {
            // Lakukan logika untuk memuat lebih banyak generasi di sini
            console.log("Load more generations...");
        }

        loadMoreBtn.addEventListener("click", loadMoreGenerations);
    });
</script>
