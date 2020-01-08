<div class="row">
    <div class="col">
        <table class="table">

            <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">Email</th>
                    <th scope="col">deleted</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($users as $user) {
                    echo "<tr>";
                    echo "<td>".$user['name']."</td>";
                    echo "<td>".$user['email']."</td>";
                    echo "<td>".$user['deleted']."</td>";
                    echo "</tr>";
                }
                ?>
                <tr>

                </tr>
            </tbody>
        </table>

    </div>
</div>
<h1><?php echo resta(7, 2); ?></h1>