
<div class="panel panel-default">
    <div class="panel-heading main-color-bg">
        <h3 class="panel-title">Messages</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" cellspacing="0">
                <thead><tr>
                    <th width="350px">Objet :</th>
                    <th>Éxpéditeur :</th>
                    <th>E-mail :</th>
                    <th>Date d'envoie :</th>
                </tr></thead>
                <?php foreach ($message as $message):?>
                <tr>
                    <td><a href="<?=$repertory?>/admin/message/<?=$message["idMessage"]?>"><?=$message["objet"]?></a></td>
                    <td><?=$message["nomExpditeur"]?></td>
                    <td><?=$message["emailExpditeur"]?></td>
                    <td><?=$message["dateEnvoie"]?></td>
                </tr>
<?php endforeach;?>
            </table>
        </div>
    </div>
</div>
