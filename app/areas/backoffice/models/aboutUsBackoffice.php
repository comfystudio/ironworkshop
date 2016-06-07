<?php
class AboutUsBackoffice extends Model{
	/** __construct */
	public function __construct(){
		parent::__construct();
	}

    /**
	 * FUNCTION: validation
	 * This function validates post data, and should be called for any update or create model calls.
	 * @param mixed array $data, $type can define different standards depending on if edit for example.
	 */
    public function validation($data, $type){
        $return = $data;
        foreach($data as $key => $input){
            $temp = null;
            if ($key != 'text' && $key != 'pricing') {
                $input = is_array($input) ? FormInput::trimArray($input) : FormInput::checkInput($input);
            }
            $return[$key] = $input;


            //text1
            if($key == 'text'){
                //Required
                if(empty($input) || $input == null){
                    $return['error'][$key] = 'Text cannot be empty';
                }
            }

            //monday
            if($key == 'monday'){
                //Required
                if(empty($input) || $input == null){
                    $return['error'][$key] = 'Monday Opening Time cannot be empty';
                }
            }

            //tuesday
            if($key == 'tuesday'){
                //Required
                if(empty($input) || $input == null){
                    $return['error'][$key] = 'Tuesday Opening Time cannot be empty';
                }
            }

            //wednesday
            if($key == 'wednesday'){
                //Required
                if(empty($input) || $input == null){
                    $return['error'][$key] = 'Wednesday Opening Time cannot be empty';
                }
            }

            //thursday
            if($key == 'thursday'){
                //Required
                if(empty($input) || $input == null){
                    $return['error'][$key] = 'Thursday Opening Time cannot be empty';
                }
            }

            //friday
            if($key == 'friday'){
                //Required
                if(empty($input) || $input == null){
                    $return['error'][$key] = 'Friday Opening Time cannot be empty';
                }
            }

            //saturday
            if($key == 'saturday'){
                //Required
                if(empty($input) || $input == null){
                    $return['error'][$key] = 'Saturday Opening Time cannot be empty';
                }
            }

            //sunday
            if($key == 'sunday'){
                //Required
                if(empty($input) || $input == null){
                    $return['error'][$key] = 'Sunday Opening Time cannot be empty';
                }
            }

            //pricing
            if($key == 'pricing'){
                //Required
                if(empty($input) || $input == null){
                    $return['error'][$key] = 'Pricing cannot be empty';
                }
            }
        }
        return $return;
    }

    /**
	 * FUNCTION: selectDataByID
	 * This function gets about_us information for backoffice
	 * @param int $id
	 */
	public function selectDataByID($id){
		$sql = "SELECT t1.id, t1.text, t1.monday, t1.tuesday, t1.wednesday, t1.thursday, t1.friday, t1.saturday, t1.sunday, t1.pricing, t1.image1, t1.image2
				FROM about_us t1
				WHERE t1.id = :id";

		return $this->_db->select($sql, array(':id' => $id));
	}

    /**
	 * FUNCTION: getAllData
	 * This function returns the details for All about_us
	 * @param int $limit, $keywords
	 */
	public function getAllData($limit = false, $keywords = false){
        $optLimit = $limit != false ? " LIMIT $limit" : "";
        $optKeywords = $keywords != false ? " AND CONCAT(IF(isnull(t1.text),' ',CONCAT(LOWER(t1.text),' '))) LIKE '%$keywords%'" : "";

		$sql = "SELECT t1.id, t1.text, t1.monday, t1.tuesday, t1.wednesday, t1.thursday, t1.friday, t1.saturday, t1.sunday, t1.pricing, t1.image1, t1.image2
				FROM about_us t1
				WHERE 1 = 1
				".$optKeywords."
				ORDER BY t1.id DESC
				".$optLimit;

		return $this->_db->select($sql);
	}

    /**
	 * FUNCTION: countAllData
	 * This function returns the count for All about_us
	 * @param int $keywords
	 */
	public function countAllData($keywords = false){
        $optKeywords = $keywords != false ? " AND CONCAT(IF(isnull(t1.text),' ',CONCAT(LOWER(t1.text),' '))) LIKE '%$keywords%'" : "";

		$sql = "SELECT COUNT(t1.id) AS total
				FROM about_us t1
				WHERE 1 = 1
				".$optKeywords;
		return $this->_db->select($sql);
	}

    /**
	 * FUNCTION: createData
	 * This function adds a new about_us to the Database from backoffice
	 * @param mixed $data Array of about_us Data
	 */
	public function createData($data){
        $data = $this->validation($data, 'add');
        if(isset($data['error']) && $data['error'] != null){
            return $data;
        }else {
            $dbTable = 'about_us';
            $postData = array(
                'text' => $data['text'],
                'monday' => $data['monday'],
                'tuesday' => $data['tuesday'],
                'wednesday' => $data['wednesday'],
                'thursday' => $data['thursday'],
                'friday' => $data['friday'],
                'saturday' => $data['saturday'],
                'sunday' => $data['sunday'],
                'pricing' => $data['pricing'],
                'image1' => $data['image1'][0],
                'image2' => $data['image2'][0]
            );

            $this->_db->insert($dbTable, $postData);

            // Gets Last Insert ID
            return $lastInsertID = $this->_db->lastInsertId('id');
        }
	}

    /**
	 * FUNCTION: updateData
	 * This function updates about_us details for backoffice
	 * @param mixed $data An array of data passed from the Controller
	 */
	public function updateData($data){
        $data = $this->validation($data, 'edit');
        if(isset($data['error']) && $data['error'] != null){
            return $data;
        }else {
            $dbTable = 'about_us';
            $postData = array(
                'text' => $data['text'],
                'monday' => $data['monday'],
                'tuesday' => $data['tuesday'],
                'wednesday' => $data['wednesday'],
                'thursday' => $data['thursday'],
                'friday' => $data['friday'],
                'saturday' => $data['saturday'],
                'sunday' => $data['sunday'],
                'pricing' => $data['pricing'],
                'image1' => $data['image1'][0],
                'image2' => $data['image2'][0]
            );
            $where = "`id` = {$data['id']}";

            $this->_db->update($dbTable, $postData, $where);
            return true;
        }
	}

    /**
	 * FUNCTION: deleteData
	 * This function deletes an about_us
	 * @param Int $id of an about_us
	 */
    public function deleteData($id){
        $dbTable = 'about_us';
        $where = "`id` = $id";
        $this->_db->delete($dbTable, $where);
		return true;
    }

}?>