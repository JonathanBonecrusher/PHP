<?php
function format($num)
    {
        return number_format($num,0, '', ' '). ' ₽';
    };
function get_dt_range(string $end_time):array
    {
        date_default_timezone_set('Asia/Yekaterinburg');

        $COUNT_MINUTE = 60;
        $minute = 1;

        $minutes = (strtotime($end_time) - time()) /$COUNT_MINUTE;

        $hours = str_pad(floor($minutes / $COUNT_MINUTE), 2, "0", STR_PAD_LEFT);
        $minutes = str_pad(floor($minutes -($hours * $COUNT_MINUTE) + $minute), 2, "0", STR_PAD_LEFT);

        return [$hours, $minutes];
    };
function get_lots(mysqli $con):array{
    $sql = "SELECT Lot.id, Lot.name as name, picture as photo, start_price as price, date_end, Category.name as category FROM Lot
    LEFT JOIN Category ON Lot.category_id = Category.id
    WHERE date_end > NOW() ORDER BY date_reg DESC";

    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
};

function get_categories(mysqli $con):array{
    $sql = "SELECT name, sym_code FROM Category";

    return mysqli_fetch_all(mysqli_query($con, $sql), MYSQLI_ASSOC);
}
?>