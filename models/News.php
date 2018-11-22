<?php
class News {
public static function getNewsList() {

    $newsList = array();
    $db Db::getConnection();
    $result = $db->query ("SELECT id, title, date, short_content
    . FROM news
    . ORDER BY date DESC
    . LIMIT 10);

    $i = 0;
    while($row = $result->fetch()) {
        $newsList[$i]["id"] = $row ["id"];
        $newsList[$i]["title"] = $row ["title"];
        $newsList[$i]["date"] = $row ["date"];
        $newsList[$i]["short_content"] = $row ["short_content"];
        $i ++;
        }
        return $newsList;
}


}
?>