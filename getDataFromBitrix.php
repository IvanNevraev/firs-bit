<?php
    final class Lead{
        private int $ID = -1;
        private string  $TITLE = "";
        private string $DATE_CREATE = "";
        private int $COMPANY_ID = -1;
        private int $CONTACT_ID = -1;
        private string $CONTACT_NAME = "";
        private $CONTACT_PHONE = array();
        private string $COMPANY_TITLE = "";
        private $COMPANY_PHONE = array();

        public function __get($property){
            switch ($property){
                case 'ID':
                    return $this->ID;
                case "TITLE":
                    return $this->TITLE;
                case "DATE_CREATE":
                    return $this->DATE_CREATE;
                case "COMPANY_ID":
                    return $this->COMPANY_ID;
                case "CONTACT_ID":
                    return $this->CONTACT_ID;
                case "CONTACT_NAME":
                    return $this->CONTACT_NAME;
                case "CONTACT_PHONE":
                    return $this->CONTACT_PHONE;
                case "COMPANY_TITLE":
                    return $this->COMPANY_TITLE;
                case "COMPANY_PHONE":
                    return $this->COMPANY_PHONE;
            }
        }
        public function __set($property, $value){
			//We can set property only one time
			//If property is seted, we trow exception
            $exceptionMessage = "The object property is already set!";
            switch ($property){
                case 'ID':
                    if($this->ID == -1){
                        $this->ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "TITLE":
                    if(strlen($this->TITLE) == 0){
                        $this->TITLE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "DATE_CREATE":
                    if(strlen($this->DATE_CREATE) == 0){
                        $this->DATE_CREATE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "COMPANY_ID":
                    if($this->COMPANY_ID == -1){
                        $this->COMPANY_ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "CONTACT_ID":
                    if($this->CONTACT_ID == -1){
                        $this->CONTACT_ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "CONTACT_NAME":
                    if(strlen($this->CONTACT_NAME) == 0){
                        $this->CONTACT_NAME = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "CONTACT_PHONE":
                    if(count($this->CONTACT_PHONE) == 0){
                        $this->CONTACT_PHONE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "COMPANY_TITLE":
                    if(strlen($this->COMPANY_TITLE) == 0){
                        $this->COMPANY_TITLE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "COMPANY_PHONE":
                    if(count($this->COMPANY_PHONE) == 0){
                        $this->COMPANY_PHONE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
            }
        }
    }
    final class Deal{
        private int $ID = -1;
        private int $LEAD_ID = -1;
        private string  $TITLE = "";
        private string $DATE_CREATE = "";
        private string $STAGE_ID = "";
        private string $OPPORTUNITY = "";
        private int $COMPANY_ID = -1;
        private int $CONTACT_ID = -1;
        private string $CONTACT_NAME = "";
        private $CONTACT_PHONE = array();
        private string $COMPANY_TITLE = "";
        private $COMPANY_PHONE = array();

        public function __get($property){
            switch ($property){
                case 'ID':
                    return $this->ID;
                case 'LEAD_ID':
                    return $this->LEAD_ID;
                case "TITLE":
                    return $this->TITLE;
                case "DATE_CREATE":
                    return $this->DATE_CREATE;
                case "STAGE_ID":
                    return $this->STAGE_ID;
                case "OPPORTUNITY":
                    return $this->OPPORTUNITY;
                case "COMPANY_ID":
                    return $this->COMPANY_ID;
                case "CONTACT_ID":
                    return $this->CONTACT_ID;
                case "CONTACT_NAME":
                    return $this->CONTACT_NAME;
                case "CONTACT_PHONE":
                    return $this->CONTACT_PHONE;
                case "COMPANY_TITLE":
                    return $this->COMPANY_TITLE;
                case "COMPANY_PHONE":
                    return $this->COMPANY_PHONE;
            }
        }  
        public function __set($property, $value){
            $exceptionMessage = "The object property is already set!";
            switch ($property){
                case 'ID':
                    if($this->ID == -1){
                        $this->ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case 'LEAD_ID':
                    if($this->LEAD_ID == -1){
                        $this->LEAD_ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "TITLE":
                    if(strlen($this->TITLE) == 0){
                        $this->TITLE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "DATE_CREATE":
                    if(strlen($this->DATE_CREATE) == 0){
                        $this->DATE_CREATE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "STAGE_ID":
                    if(strlen($this->STAGE_ID) == 0){
                        $this->STAGE_ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "OPPORTUNITY":
                    if(strlen($this->OPPORTUNITY) == 0){
                        $this->OPPORTUNITY = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "COMPANY_ID":
                    if($this->COMPANY_ID == -1){
                        $this->COMPANY_ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "CONTACT_ID":
                    if($this->CONTACT_ID == -1){
                        $this->CONTACT_ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "CONTACT_NAME":
                    if(strlen($this->CONTACT_NAME) == 0){
                        $this->CONTACT_NAME = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "CONTACT_PHONE":
                    if(count($this->CONTACT_PHONE) == 0){
                        $this->CONTACT_PHONE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "COMPANY_TITLE":
                    if(strlen($this->COMPANY_TITLE) == 0){
                        $this->COMPANY_TITLE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "COMPANY_PHONE":
                    if(count($this->COMPANY_PHONE) == 0){
                        $this->COMPANY_PHONE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
            }
        }      
    }
    final class Company{
        private int $ID = -1;
        private string $TITLE = "";
        private $PHONE = array();
        public function __get($property){
            switch ($property){
                case 'ID':
                    return $this->ID;
                case "TITLE":
                    return $this->TITLE;
                case "PHONE":
                    return $this->PHONE;
            }
        }  
        public function __set($property, $value){
            $exceptionMessage = "The object property is already set!";
            switch ($property){
                case 'ID':
                    if($this->ID == -1){
                        $this->ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "TITLE":
                    if(strlen($this->TITLE) == 0){
                        $this->TITLE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "PHONE":
                    if(count($this->PHONE) == 0){
                        $this->PHONE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
            }
        } 
    }
    final class Contact{
        private int $ID = -1;
        private string $NAME = "";
        private $PHONE = array();
        public function __get($property){
            switch ($property){
                case 'ID':
                    return $this->ID;
                case "NAME":
                    return $this->NAME;
                case "PHONE":
                    return $this->PHONE;
            }
        }  
        public function __set($property, $value){
            $exceptionMessage = "The object property is already set!";
            switch ($property){
                case 'ID':
                    if($this->ID == -1){
                        $this->ID = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "NAME":
                    if(strlen($this->NAME) == 0){
                        $this->NAME = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
                case "PHONE":
                    if(count($this->PHONE) == 0){
                        $this->PHONE = $value;
                    }else{
                        throw new Exception($exceptionMessage);
                    }
                    break;
            }
        } 
    }
    $listLeads = array();   
    $listDeals = array();  
    $listContacts = array();
    $listCompanys = array();
    $hostForRecuest = "https://b24-ke0xv2.bitrix24.ru/rest/1/";
    $tokenForRecuest = "4afcc48pikyb7bh3/";
    $crmLeadList = 'crm.lead.list.json';
    $crmDealList = 'crm.deal.list.json';
    $crmContactList = "crm.contact.list";
    $crmCompanyList = "crm.company.list";
    $crmContactGet = "crm.contact.get.json?ID=";
    $crmCompanyGet = "crm.company.get.json?ID=";
    //Get all leads and deals, add needed parametrs to object
    $responseString = file_get_contents($hostForRecuest.$tokenForRecuest.$crmLeadList);
    $responseArray = json_decode($responseString, true);
    foreach($responseArray["result"] as $value){
        $lead = new Lead;
        $lead->TITLE = $value["TITLE"];
        $date = date("d.m.Y H:i:s",strtotime($value["DATE_CREATE"]));
        $lead->DATE_CREATE = $date;
        $lead->COMPANY_ID = (int)$value["COMPANY_ID"];
        $lead->CONTACT_ID = (int)$value["CONTACT_ID"];
        $lead->ID = (int)$value["ID"];
        $listLeads[$value["ID"]] = $lead;
    }
    $responseString = file_get_contents($hostForRecuest.$tokenForRecuest.$crmDealList);
    $responseArray = json_decode($responseString, true);
    foreach($responseArray["result"] as $value){
        $deal = new Deal;
        $deal->ID = (int)$value["ID"];
        $deal->LEAD_ID = (int)$value["LEAD_ID"];
        $deal->TITLE = $value["TITLE"];
        $date = date("d.m.Y H:i:s",strtotime($value["DATE_CREATE"]));
        $deal->DATE_CREATE = $date;
        $deal->STAGE_ID = $value["STAGE_ID"];
        $deal->OPPORTUNITY = $value["OPPORTUNITY"];
        $deal->COMPANY_ID = (int)$value["COMPANY_ID"];
        $deal->CONTACT_ID = (int)$value["CONTACT_ID"];
        $listDeals[$value["ID"]] = $deal;
    }
    foreach($listLeads as $value){
        //Get contsct for lead by id
        if($value->CONTACT_ID){
            if($listContacts[$value->CONTACT_ID]){
                $contactName = $listContacts[$value->CONTACT_ID]->NAME;
                $contactPhone = $listContacts[$value->CONTACT_ID]->PHONE;
            }else{
                $responseString = file_get_contents($hostForRecuest.$tokenForRecuest.$crmContactGet.$value->CONTACT_ID);
                $responseArray = json_decode($responseString, true);
                $contactName = $responseArray["result"]["NAME"];
                $contactPhone = $responseArray["result"]["PHONE"];
                $contact = new Contact;
                $contact->ID = $responseArray["result"]["ID"];
                $contact->NAME = $responseArray["result"]["NAME"];
                $contact->PHONE = $responseArray["result"]["PHONE"];
                $listContacts[$responseArray["result"]["ID"]] = $contact;
            }
            $listLeads[$value->ID]->CONTACT_NAME = $contactName;
            $listLeads[$value->ID]->CONTACT_PHONE = $contactPhone;
        }
        //Get company for lead by id
        if($value->COMPANY_ID!=0){
            if($listCompanys[$value->COMPANY_ID]){
                $companyTitle = $listCompanys[$value->COMPANY_ID]->TITLE;
                $companyPhone = $listCompanys[$value->COMPANY_ID]->PHONE;
            }else{
                $responseString = file_get_contents($hostForRecuest.$tokenForRecuest.$crmCompanyGet.$value->COMPANY_ID);
                $responseArray = json_decode($responseString, true);
                $companyTitle = $responseArray["result"]["TITLE"];
                $companyPhone = $responseArray["result"]["PHONE"];
                $company = new Company;
                $company->ID = $responseArray["result"]["ID"];
                $company->TITLE = $responseArray["result"]["TITLE"];
                $company->PHONE = $responseArray["result"]["PHONE"];
                $listCompanys[$responseArray["result"]["ID"]] = $company;
            }
            $listLeads[$value->ID]->COMPANY_TITLE = $companyTitle;
            $listLeads[$value->ID]->COMPANY_PHONE = $companyPhone;
        }
    }
    foreach($listDeals as $value){
        //Get contsct for deal by id
        if($value->CONTACT_ID){
            if($listContacts[$value->CONTACT_ID]){
                $contactName = $listContacts[$value->CONTACT_ID]->NAME;
                $contactPhone = $listContacts[$value->CONTACT_ID]->PHONE;
            }else{
                $responseString = file_get_contents($hostForRecuest.$tokenForRecuest.$crmContactGet.$value->CONTACT_ID);
                $responseArray = json_decode($responseString, true);
                $contactName = $responseArray["result"]["NAME"];
                $contactPhone = $responseArray["result"]["PHONE"];
                $contact = new Contact;
                $contact->ID = $responseArray["result"]["ID"];
                $contact->NAME = $responseArray["result"]["NAME"];
                $contact->PHONE = $responseArray["result"]["PHONE"];
                $listContacts[$responseArray["result"]["ID"]] = $contact;
            }
            $listDeals[$value->ID]->CONTACT_NAME = $contactName;
            $listDeals[$value->ID]->CONTACT_PHONE = $contactPhone;
        }
        //Get company for deal by id
        if($value->COMPANY_ID!=0){
            if($listCompanys[$value->COMPANY_ID]){
                $companyTitle = $listCompanys[$value->COMPANY_ID]->TITLE;
                $companyPhone = $listCompanys[$value->COMPANY_ID]->PHONE;
            }else{
                $responseString = file_get_contents($hostForRecuest.$tokenForRecuest.$crmCompanyGet.$value->COMPANY_ID);
                $responseArray = json_decode($responseString, true);
                $companyTitle = $responseArray["result"]["TITLE"];
                $companyPhone = $responseArray["result"]["PHONE"];
                $company = new Company;
                $company->ID = $responseArray["result"]["ID"];
                $company->TITLE = $responseArray["result"]["TITLE"];
                $company->PHONE = $responseArray["result"]["PHONE"];
                $listCompanys[$responseArray["result"]["ID"]] = $company;
            }
            $listDeals[$value->ID]->COMPANY_TITLE = $companyTitle;
            $listDeals[$value->ID]->COMPANY_PHONE = $companyPhone;
        }
    }
    function tableLeads($listLeads){
        echo "<table border=1><caption>Список лидов из портала Битрикс 24</caption><tr><th>ID</th><th>Название</th><th>Дата и время создания</th><th>Имя контакта<br>Название компании</th><th>Телефон</th></tr>";
        foreach($listLeads as $value){
            echo "<tr>";
            echo "<td>".$value->ID."</td>";
            echo "<td>".$value->TITLE."</td>";
            echo "<td>".$value->DATE_CREATE."</td>";
            if(count($value->CONTACT_PHONE)!=0){
                echo "<td>".$value->CONTACT_NAME."</td>";
                echo "<td>".$value->CONTACT_PHONE[0]["VALUE"]."</td>";
            }
            if(count($value->COMPANY_PHONE)!=0){
                echo "<td>".$value->COMPANY_TITLE."</td>";
                echo "<td>".$value->COMPANY_PHONE[0]["VALUE"]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    function tableDeals($listDeals, $status="ALL"){
        $statusDescription = array(
            "NEW" => "Отправлено КП",
            "EXECUTING" => "Отгрузка",
            "WON" => "Завершена успешно",
            "PREPARATION" => "Переговоры",
            "PREPAYMENT_INVOICE" => "Отправлен счет на оплату",
            "FINAL_INVOICE" => "Передача клиенту"
        );
        echo "<table border=1><caption>Список сделок из портала Битрикс 24";
        if($status!="ALL"){
            echo " co статусом ".$statusDescription[$status];
        }
        echo "</caption><tr><th>ID</th><th>Название</th><th>Дата и время создания</th>";
        echo "<th>Статус</th><th>Возможность</th><th>Имя контакта<br>Название компании</th><th>Телефон</th></tr>";
        foreach($listDeals as $value){
            if($status!="ALL"&&$status!=$value->STAGE_ID){
                continue;
            }
            echo "<tr>";
            echo "<td>".$value->ID."</td>";
            echo "<td>".$value->TITLE."</td>";
            echo "<td>".$value->DATE_CREATE."</td>";
            echo "<td>".$statusDescription[$value->STAGE_ID]."</td>";
            echo "<td>".$value->OPPORTUNITY."</td>";
            if(count($value->CONTACT_PHONE)!=0){
                echo "<td>".$value->CONTACT_NAME."</td>";
                echo "<td>".$value->CONTACT_PHONE[0]["VALUE"]."</td>";
            }
            if(count($value->COMPANY_PHONE)!=0){
                echo "<td>".$value->COMPANY_TITLE."</td>";
                echo "<td>".$value->COMPANY_PHONE[0]["VALUE"]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>