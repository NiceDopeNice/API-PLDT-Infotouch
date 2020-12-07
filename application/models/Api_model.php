<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_MODEL {

    function getDistrict()
    {
		$sql = "EXEC sp_get_all_district";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getSSCLogin()
    {
		$sql = "EXEC sp_get_all_ssc_login";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getGroup()
    {
		$sql = "EXEC sp_get_grouplist";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getButtonList()
    {
		$sql = "EXEC sp_get_categorylist";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getPldtProducts()
    {
		$sql = "EXEC sp_get_pldtproduct_list";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getPldtVas()
    {
		$sql = "EXEC sp_get_pldtvas_list";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    
    function getAreaCode()
    {
		$sql = "EXEC sp_get_areacode_list_group";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getCityByProvince($data)
    {
		$sql = "EXEC sp_get_city_by_province @province = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getPldtTypePaymentChannelByBrand($data)
    {
		$sql = "EXEC sp_get_type_channellist_by_brand @pct_group = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getPldtPaymentChannelByType($data)
    {
		$sql = "EXEC sp_get_payment_channels_by_type @pc_type = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getZipCityByProvince($data)
    {
		$sql = "EXEC sp_get_zipcode_by_province @phzipcodes_province = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }
    
    function getPldtVasByID($data)
    {
		$sql = "EXEC sp_get_pldtvas_by_id @v_id = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getPldtProductByID($data)
    {
		$sql = "EXEC sp_get_pldtprod_by_id @h_id = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function getAllSSCS($data)
    {
		$sql = "EXEC sp_get_all_sscs_by_group @ssc_group = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }

    function checkIP($data)
    {
		$sql = "EXEC sp_check_ip @ip = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }
    

    function getPldtLocationByCity($data)
    {
		$sql = "EXEC sp_get_location_by_city @phzipcodes_city = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }
    
    function getPldtZipCodeGroup()
    {
		$sql = "EXEC sp_get_zipcode_list_group";
		$query = $this->db->query($sql)->result();
		return $query;
    }
    
    function getSmartProducts()
    {
		$sql = "EXEC sp_get_smartprod_list";
		$query = $this->db->query($sql)->result();
		return $query;
    }
    
    function getSmartContact()
    {
		$sql = "EXEC sp_get_contact_list";
		$query = $this->db->query($sql)->result();
		return $query;
    }
    
    function getSmartProductByID($data)
    {
		$sql = "EXEC sp_get_smartprod_by_id @h_id = N'{$data}'";
		$query = $this->db->query($sql)->result();
		return $query;
    }
    
    function insertIP($data)
    {
        $sql = "EXEC sp_insert_ip
            @location_ip = '{$data['location_ip']}',
            @location_district = '{$data['location_district']}',
            @location_ssc = '{$data['location_ssc']}'";

		$query = $this->db->query($sql)->row();
		return $query;
    }

    function insertPageHits($data)
    {
        $sql = "EXEC sp_insert_page_hits
            @p_category = '{$data['p_category']}',
            @p_district = '{$data['p_district']}',
            @p_ssc = '{$data['p_ssc']}',
            @p_ipaddress = '{$data['p_ipaddress']}',
            @p_page = '{$data['p_page']}',
            @p_feature = '{$data['p_feature']}'";

		$query = $this->db->query($sql)->row();
		return $query;
    }
      
}

?>