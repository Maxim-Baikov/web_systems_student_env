<div class="section">
    <div class="section-inner section-inner1">
        <div class="shell clearfix">
            <div class="section-entry">
                <?php
                mysql_query("SET NAMES utf8");
                $query = mysql_query("SELECT * FROM description_room");
                while ($b = mysql_fetch_assoc($query)) {
                    echo '<div class="category"><h2>' . $b ['category'] . '</h2></div><br>';
                    echo '<div class="bedspace"><p>' . $b ['bedspace'] . '-х местный</p></div>';
                    echo '<div class="descriptioт"><p>' . $b ['description'] . '</p></div>';
                    echo '<div class="cost"><br><p>Стоимость ' . $b ['cost'] . ' руб. за сутки</p></div>';
                    echo '<a href="http://shop.borderfree.com/stores" class="button" target="_blank">Забронировать номер <i></i></a>';
                    echo '<a href="" class="back-to-top">Вверх</a>';
                }
                ?>
            </div>
        </div>
    </div>
</div>