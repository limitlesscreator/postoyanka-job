<?php
include('amo_func.php');
amo_auth();

if($_SERVER['HTTP_REFERER']) $query=parse_url( $_SERVER['HTTP_REFERER'], PHP_URL_QUERY);
else $query='';

//print_r($_POST);

if($_POST['name']) $wname=$_POST['name'];
else $wname='unknown';

$time=time();

//поиск контакта среди имеющихся
if(isset($_POST['phone']))
{
	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/list/?query='.$_POST['phone'];
	$res=amo_query($link,'');
	foreach($res['response']['contacts'] as $k=>$v)
	{
		foreach($v['custom_fields'] as $k2=>$v2)
		{
			if($v2['code']=='PHONE') 
			{
				foreach($v2['values'] as $k3=>$v3) if($v3['value']==$_POST['phone']) 
				{
					$C_ID=$v['id'];
					$C_LEADS=$v['linked_leads_id'];
				}
			}
		}
	}
}
/*if(isset($_POST['ContactForm']['email']) && !$C_ID)
{
	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/list/?query='.$_POST['ContactForm']['email'];
	$res=amo_query($link,'');
	foreach($res['response']['contacts'] as $k=>$v)
	{
		foreach($v['custom_fields'] as $k2=>$v2)
		{
			if($v2['code']=='EMAIL') 
			{
				foreach($v2['values'] as $k3=>$v3) if($v3['value']==$_POST['ContactForm']['email']) 
				{
					$C_ID=$v['id'];
					$C_LEADS=$v['linked_leads_id'];
				}
			}
		}
	}
}*/
//смена статуса лида 

/*if(count($C_LEADS)>0) $status='18653356';
else $status='17977336';*/
$status='18653356';

/*if($_POST['ContactForm']['email'])
	$C_TAGS = 'www.footclinic.ru, #question';
else
	$C_TAGS = 'www.footclinic.ru, #callback';
*/
//добавляем лид
$request['request']['leads']['add']=array(	
	array(
		"name"=>"Лид с лендинга МК",
		"last_modified"=> $time,
		"responsible_user_id"=>'2225857',
		"status_id"=> $status,
		/*"tags"=> $C_TAGS,*/
  		"custom_fields"=>array(
            /*array(
                "id"=>'351977',
                "values"=> array(
                    array(
       	                "value"=>$time,
                        "enum"=>"WORK"
                    )
                )
            ),*/
            /*array(
                "id"=>'394120',
                "values"=> array(
                    array(
       	                "value"=>urldecode($query),
                        "enum"=>"WORK"
                    )
                )
            )*/
			/*array(
				"id" => '255859',
				"values" => array(
					array(
						"value" => urldecode($query),
						"enum" => "WORK"
					)
				)
			),*/
			/*array(
                "id"=>'252237',
                "values"=> array(
                    array(
       	                "value"=>$_POST['OrderForm']['text'],
                        "enum"=>"WORK"
                    )
                )
            )*/
		)
	) 
);
$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/leads/set';
$res=amo_query($link,$request);
$LEAD_ID=$res['response']['leads']['add'][0]['id'];
$LEAD_RES=json_encode($res);
/*if($_POST['gorod']) $my_city=$_POST['gorod'];
else $my_city=my_city();*/
if($C_ID)
{
	$C_LEADS[]=$LEAD_ID;
	$contacts['request']['contacts']['update']=array(	
		array(
			"id"=> $C_ID,
			"last_modified"=> $time,
			"linked_leads_id"=> $C_LEADS,
			"tags"=> $C_TAGS,
			"custom_fields"=>array(
	            /* array(
	                "id"=>'195051',
	                "values"=> array(
	                    array(
        	                "value"=>$my_city, 
	                        "enum"=>"WORK"
	                    )
	                )
	            ), */
	            array(
	                "id"=>$CF_PHONE,
	                "values"=> array(
	                    array(
        	                "value"=>$_POST['phone'],
	                        "enum"=>"WORK"
	                    )
	                )
	            ),
	            /*array(
	                "id"=>$CF_EMAIL,
	                "values"=> array(
	                    array(
        	                "value"=>$_POST['ContactForm']['email'],
	                        "enum"=>"WORK"
	                    )
	                )
	            )*/
			)	
		)
	);
	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';
	$res=amo_query($link,$contacts);
}
else
{
	$contacts['request']['contacts']['add']=array(	
		array(
			"name"=>$wname,
			"last_modified"=> $time,
			"linked_leads_id"=> $LEAD_ID,
			"tags"=> $C_TAGS,
			"custom_fields"=>array(
	            /*array(
	                "id"=>'195051',
	                "values"=> array(
	                    array(
        	                "value"=>$my_city, 
	                        "enum"=>"WORK"
	                    )
	                )
	            ),*/
	            /*array(
	                "id"=>'194713',
	                "values"=> array(
	                    array(
        	                "value"=>$_POST['formName'].$nisha.$cena, 
	                        "enum"=>"WORK"
	                    )
	                )
	            ),*/
	            array(
	                "id"=>$CF_PHONE,
	                "values"=> array(
	                    array(
        	                "value"=>$_POST['phone'],
	                        "enum"=>"WORK"
	                    )
	                )
	            ),
	            /*array(
	                "id"=>$CF_EMAIL,
	                "values"=> array(
	                    array(
        	                "value"=>$_POST['ContactForm']['email'],
	                        "enum"=>"WORK"
	                    )
	                )
	            )*/
			)	
		) 
	);
	$link='https://'.$subdomain.'.amocrm.ru/private/api/v2/json/contacts/set';
	$res=amo_query($link,$contacts);
	$C_ID=$res['response']['contacts']['add'][0]['id'];
}

//echo true;