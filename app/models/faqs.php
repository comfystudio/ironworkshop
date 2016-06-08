<?php
class Faqs extends Model{
    /** __construct */
    public function __construct(){
        parent::__construct();
    }


    /**
     * FUNCTION: selectDataByID
     * This function gets faqs information for backoffice
     * @param int $id
     */
    public function selectDataByID($id){
        $sql = "SELECT t1.id, t1.question, t1.answer, t1.sort, t1.is_active
				FROM faqs t1
				WHERE t1.id = :id";

        return $this->_db->select($sql, array(':id' => $id));
    }

    /**
     * FUNCTION: getAllData
     * This function returns the details for All faqs
     * @param int $limit, $keywords
     */
    public function getAllData($limit = false, $keywords = false, $active = false){
        $optLimit = $limit != false ? " LIMIT $limit" : "";
        $optKeywords = $keywords != false ? " AND CONCAT(IF(isnull(t1.question),' ',CONCAT(LOWER(t1.question),' ')),IF(isnull(t1.answer),' ',CONCAT(LOWER(t1.answer),'  '))) LIKE '%$keywords%'" : "";
        $optActive = $active != false ? " AND t1.is_active = $active" : "";

        $sql = "SELECT t1.id, t1.question, t1.answer, t1.sort, t1.is_active
				FROM faqs t1
				WHERE 1 = 1
				".$optActive."
				".$optKeywords."
				ORDER BY t1.sort ASC
				".$optLimit;

        return $this->_db->select($sql);
    }

    /**
     * FUNCTION: countAllData
     * This function returns the count for All faqs
     * @param int $keywords
     */
    public function countAllData($keywords = false, $active = false){
        $optKeywords = $keywords != false ? " AND CONCAT(IF(isnull(t1.question),' ',CONCAT(LOWER(t1.question),' ')),IF(isnull(t1.answer),' ',CONCAT(LOWER(t1.answer),'  '))) LIKE '%$keywords%'" : "";
        $optActive = $active != false ? " AND t1.is_active = $active" : "";

        $sql = "SELECT COUNT(t1.id) AS total
				FROM faqs t1
				WHERE 1 = 1
				".$optActive."
				".$optKeywords;
        return $this->_db->select($sql);
    }


}?>