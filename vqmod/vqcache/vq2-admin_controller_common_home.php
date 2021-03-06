<?php   
class ControllerCommonHome extends Controller {   
	public function index() {
    	
			$this->load->language('common/header');
			$this->load->language('common/home');
			$this->data['text_front'] = $this->language->get('text_front');
			$this->data['text_logout'] = $this->language->get('text_logout');
			$this->data['text_total_sales_previous_years'] = $this->language->get('text_total_sales_previous_years');
			$this->data['text_other_stats'] = $this->language->get('text_other_stats');
			
			$this->data['text_total_review'] = $this->language->get('text_total_review');

			$this->data['stores'] = array();
			
			$this->load->model('setting/store');
			
			$results = $this->model_setting_store->getStores();
			
			foreach ($results as $result) {
				$this->data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url']
				);
			}

			$this->data['store'] = HTTP_CATALOG;
			
	 
		$this->document->setTitle($this->language->get('heading_title'));
		
    	$this->data['heading_title'] = $this->language->get('heading_title');
		
		$url = '';
		$this->data['text_settings'] = $this->language->get('text_settings');
		$this->data['settings'] = $this->url->link('setting/store', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_modules'] = $this->language->get('text_modules');
		$this->data['modules'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_modules_shipping'] = $this->language->get('text_modules_shipping');
		$this->data['modules_shipping'] = $this->url->link('extension/shipping', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_modules_payment'] = $this->language->get('text_modules_payment');
		$this->data['modules_payment'] = $this->url->link('extension/payment', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_add_product'] = $this->language->get('text_add_product');
		$this->data['add_product'] = $this->url->link('catalog/product/insert', 'token=' . $this->session->data['token'] . $url, 'SSL');
		$this->data['text_products'] = $this->language->get('text_products');
		$this->data['products'] = $this->url->link('catalog/product', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_add_category'] = $this->language->get('text_add_category');
		$this->data['add_category'] = $this->url->link('catalog/category/insert', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_categories'] = $this->language->get('text_categories');
		$this->data['categories'] = $this->url->link('catalog/category', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_attributes'] = $this->language->get('text_attributes');
		$this->data['attributes'] = $this->url->link('catalog/attribute', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_options'] = $this->language->get('text_options');
		$this->data['options'] = $this->url->link('catalog/option', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_manufacturer'] = $this->language->get('text_manufacturer');
		$this->data['manufacturer'] = $this->url->link('catalog/manufacturer', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_downloads'] = $this->language->get('text_downloads');
		$this->data['downloads'] = $this->url->link('catalog/download', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_information'] = $this->language->get('text_information');
		$this->data['information'] = $this->url->link('catalog/information', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_reviews'] = $this->language->get('text_reviews');
		$this->data['reviews'] = $this->url->link('catalog/review', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_orders'] = $this->language->get('text_orders');
		$this->data['order_s'] = $this->url->link('sale/order', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_returns'] = $this->language->get('text_returns');
		$this->data['returns'] = $this->url->link('sale/return', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_customers'] = $this->language->get('text_customers');
		$this->data['customers'] = $this->url->link('sale/customer', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_coupons'] = $this->language->get('text_coupons');
		$this->data['coupons'] = $this->url->link('sale/coupon', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_mail'] = $this->language->get('text_mail');
		$this->data['mail'] = $this->url->link('sale/contact', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_purchased'] = $this->language->get('text_purchased');
		$this->data['purchased'] = $this->url->link('report/product_purchased', 'token=' . $this->session->data['token'], 'SSL');
		$this->data['text_backup_restore'] = $this->language->get('text_backup_restore');
		$this->data['backup_restore'] = $this->url->link('tool/backup', 'token=' . $this->session->data['token'], 'SSL');
		
		$this->data['text_overview'] = $this->language->get('text_overview');
		$this->data['text_abandoned_orders'] = $this->language->get('text_abandoned_orders');
		$this->data['text_info'] = $this->language->get('text_info');
		$this->data['text_view'] = $this->language->get('text_view');
		$this->data['text_close'] = $this->language->get('text_close');
		$this->data['text_quick_buttons'] = $this->language->get('text_quick_buttons');
		$this->data['text_statistics'] = $this->language->get('text_statistics');
		$this->data['text_latest_10_orders'] = $this->language->get('text_latest_10_orders');
		$this->data['text_total_product'] = $this->language->get('text_total_product');
		$this->data['text_total_sale'] = $this->language->get('text_total_sale');
		$this->data['text_total_sale_year'] = $this->language->get('text_total_sale_year');
		$this->data['text_total_order'] = $this->language->get('text_total_order');
		$this->data['text_total_customer'] = $this->language->get('text_total_customer');
		$this->data['text_total_customer_approval'] = $this->language->get('text_total_customer_approval');
		$this->data['text_total_review_approval'] = $this->language->get('text_total_review_approval');
		$this->data['text_total_affiliate'] = $this->language->get('text_total_affiliate');
		$this->data['text_total_affiliate_approval'] = $this->language->get('text_total_affiliate_approval');
		$this->data['text_day'] = $this->language->get('text_day');
		$this->data['text_week'] = $this->language->get('text_week');
		$this->data['text_month'] = $this->language->get('text_month');
		$this->data['text_year'] = $this->language->get('text_year');
		$this->data['text_no_results'] = $this->language->get('text_no_results');
		$this->data['text_clear_cache'] = $this->language->get('text_clear_cache');

		$this->data['column_order'] = $this->language->get('column_order');
		$this->data['column_customer'] = $this->language->get('column_customer');
		$this->data['column_status'] = $this->language->get('column_status');
		$this->data['column_date_added'] = $this->language->get('column_date_added');
		$this->data['column_total'] = $this->language->get('column_total');
		$this->data['column_firstname'] = $this->language->get('column_firstname');
		$this->data['column_lastname'] = $this->language->get('column_lastname');
		$this->data['column_action'] = $this->language->get('column_action');
		
		$this->data['entry_range'] = $this->language->get('entry_range');
		
		// Check install directory exists
 		if (is_dir(dirname(DIR_APPLICATION) . '/install')) {
			$this->data['error_install'] = $this->language->get('error_install');
		} else {
			$this->data['error_install'] = '';
		}

		// Check image directory is writable
		$file = DIR_IMAGE . 'test';
		
		$handle = fopen($file, 'a+'); 
		
		fwrite($handle, '');
			
		fclose($handle); 		
		
		if (!file_exists($file)) {
			$this->data['error_image'] = sprintf($this->language->get('error_image'). DIR_IMAGE);
		} else {
			$this->data['error_image'] = '';
			
			unlink($file);
		}
		
		// Check image cache directory is writable
		$file = DIR_IMAGE . 'cache/test';
		
		$handle = fopen($file, 'a+'); 
		
		fwrite($handle, '');
			
		fclose($handle); 		
		
		if (!file_exists($file)) {
			$this->data['error_image_cache'] = sprintf($this->language->get('error_image_cache'). DIR_IMAGE . 'cache/');
		} else {
			$this->data['error_image_cache'] = '';
			
			unlink($file);
		}
		
		// Check cache directory is writable
		$this->data['clear_cache'] = $this->url->link('common/home','token=' . $this->session->data['token'].'&clear_cache=true','SSL');
            if(isset($this->request->get['clear_cache'])){
                $iterator = new DirectoryIterator(DIR_CACHE);
                foreach($iterator as $file){
                    if(!$file->isDot()){
                        unlink($file->getPathname());
                    }
                }
            }
		
		$file = DIR_CACHE . 'test';
		
		$handle = fopen($file, 'a+'); 
		
		fwrite($handle, '');
			
		fclose($handle); 		
		
		if (!file_exists($file)) {
			$this->data['error_cache'] = sprintf($this->language->get('error_image_cache'). DIR_CACHE);
		} else {
			$this->data['error_cache'] = '';
			
			unlink($file);
		}
		
		// Check download directory is writable
		$file = DIR_DOWNLOAD . 'test';
		
		$handle = fopen($file, 'a+'); 
		
		fwrite($handle, '');
			
		fclose($handle); 		
		
		if (!file_exists($file)) {
			$this->data['error_download'] = sprintf($this->language->get('error_download'). DIR_DOWNLOAD);
		} else {
			$this->data['error_download'] = '';
			
			unlink($file);
		}
		
		// Check logs directory is writable
		$file = DIR_LOGS . 'test';
		
		$handle = fopen($file, 'a+'); 
		
		fwrite($handle, '');
			
		fclose($handle); 		
		
		if (!file_exists($file)) {
			$this->data['errorlogs'] = sprintf($this->language->get('error_logs'). DIR_LOGS);
		} else {
			$this->data['error_logs'] = '';
			
			unlink($file);
		}
										
		$this->data['breadcrumbs'] = array();

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);

		$this->data['token'] = $this->session->data['token'];
		
		$this->load->model('catalog/product');

		$this->data['total_product'] = $this->model_catalog_product->getTotalProducts();
		
		$this->load->model('sale/order');

		$this->data['total_sale'] = $this->currency->format($this->model_sale_order->getTotalSales(), $this->config->get('config_currency'));
		$this->data['total_sale_year'] = $this->currency->format($this->model_sale_order->getTotalSalesByYear(date('Y')), $this->config->get('config_currency'));
		$this->data['total_order'] = $this->model_sale_order->getTotalOrders();

			$this->data['total_sale_raw'] = $this->model_sale_order->getTotalSales();
			$this->data['total_sale_year_raw'] = $this->model_sale_order->getTotalSalesByYear(date('Y'));
			$this->data['total_sales_previous_years_raw'] = $this->data['total_sale_raw'] - $this->data['total_sale_year_raw'];
			$this->data['total_sales_previous_years'] = $this->currency->format($this->data['total_sale_raw'] - $this->data['total_sale_year_raw'], $this->config->get('config_currency'));
			
		$this->data['total_abandoned_orders'] = $this->model_sale_order->getAbandonedOrderCount();
		$this->data['abandoned_order_ids'] = $this->model_sale_order->getAbandonedOrderIds();
		
		$this->load->model('sale/customer');
		
		$this->data['total_customer'] = $this->model_sale_customer->getTotalCustomers();
		$this->data['total_customer_approval'] = $this->model_sale_customer->getTotalCustomersAwaitingApproval();
			if( $this->data['total_customer_approval'] > 0 )
				$this->data['total_customer_approval'] = sprintf('<span class="attn">%s</span>', $this->data['total_customer_approval']);
		
		$this->load->model('catalog/review');
		
		$this->data['total_review'] = $this->model_catalog_review->getTotalReviews();
		$this->data['total_review_approval'] = $this->model_catalog_review->getTotalReviewsAwaitingApproval();
			if( $this->data['total_review_approval'] > 0 )
				$this->data['total_review_approval'] = sprintf('<span class="attn">%s</span>', $this->data['total_review_approval']);
		
		$this->load->model('sale/affiliate');
		
		$this->data['total_affiliate'] = $this->model_sale_affiliate->getTotalAffiliates();
		$this->data['total_affiliate_approval'] = $this->model_sale_affiliate->getTotalAffiliatesAwaitingApproval();
			if( $this->data['total_affiliate_approval'] > 0 )
				$this->data['total_affiliate_approval'] = sprintf('<span class="attn">%s</span>', $this->data['total_affiliate_approval']);
				
		$this->data['orders'] = array(); 
		
		$data = array(
			'sort'  => 'o.date_added',
			'order' => 'DESC',
			'start' => 0,
			'limit' => 10
		);
		
		$results = $this->model_sale_order->getOrders($data);
    	
    	foreach ($results as $result) {
			$action = array();
			 
			$action[] = array(
				'text' => $this->language->get('text_view'),
				'href' => $this->url->link('sale/order/info', 'token=' . $this->session->data['token'] . '&order_id=' . $result['order_id'], 'SSL')
			);
					
			$this->data['orders'][] = array(
				'order_id'   => $result['order_id'],
				'customer'   => $result['customer'],
				'status'     => $result['status'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'total'      => $this->currency->format($result['total'], $result['currency_code'], $result['currency_value']),
				'action'     => $action
			);
		}

		if ($this->config->get('config_currency_auto')) {
			$this->load->model('localisation/currency');
		
			$this->model_localisation_currency->updateCurrencies();
		}
		
		
			$this->template = 'admin_theme/base5builder_impulsepro/common/home.tpl';
			
		$this->children = array(
			'common/header',
			'common/newspanel',
			'common/footer'
		);
				
		$this->response->setOutput($this->render());
  	}
	
	public function chart() {
		
			$this->load->language('common/header');
			$this->load->language('common/home');
			$this->data['text_front'] = $this->language->get('text_front');
			$this->data['text_logout'] = $this->language->get('text_logout');
			$this->data['text_total_sales_previous_years'] = $this->language->get('text_total_sales_previous_years');
			$this->data['text_other_stats'] = $this->language->get('text_other_stats');
			
			$this->data['text_total_review'] = $this->language->get('text_total_review');

			$this->data['stores'] = array();
			
			$this->load->model('setting/store');
			
			$results = $this->model_setting_store->getStores();
			
			foreach ($results as $result) {
				$this->data['stores'][] = array(
					'name' => $result['name'],
					'href' => $result['url']
				);
			}

			$this->data['store'] = HTTP_CATALOG;
			
		
		$data = array();
		
		$data['order'] = array();
		$data['customer'] = array();
		$data['xaxis'] = array();
		
		$data['order']['label'] = $this->language->get('text_order');
		$data['customer']['label'] = $this->language->get('text_customer');
		
		if (isset($this->request->get['range'])) {
			$range = $this->request->get['range'];
		} else {
			$range = 'month';
		}
		
		switch ($range) {
			case 'day':
				for ($i = 0; $i < 24; $i++) {
					$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "order` WHERE order_status_id > '0' AND (DATE(date_added) = DATE(NOW()) AND HOUR(date_added) = '" . (int)$i . "') GROUP BY HOUR(date_added) ORDER BY date_added ASC");
					
					if ($query->num_rows) {
						$data['order']['data'][]  = array($i, (int)$query->row['total']);
					} else {
						$data['order']['data'][]  = array($i, 0);
					}
					
					$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer WHERE DATE(date_added) = DATE(NOW()) AND HOUR(date_added) = '" . (int)$i . "' GROUP BY HOUR(date_added) ORDER BY date_added ASC");
					
					if ($query->num_rows) {
						$data['customer']['data'][] = array($i, (int)$query->row['total']);
					} else {
						$data['customer']['data'][] = array($i, 0);
					}
			
					$data['xaxis'][] = array($i, date('H', mktime($i, 0, 0, date('n'), date('j'), date('Y'))));
				}					
				break;
			case 'week':
				$date_start = strtotime('-' . date('w') . ' days'); 
				
				for ($i = 0; $i < 7; $i++) {
					$date = date('Y-m-d', $date_start + ($i * 86400));

					$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "order` WHERE order_status_id > '0' AND DATE(date_added) = '" . $this->db->escape($date) . "' GROUP BY DATE(date_added)");
			
					if ($query->num_rows) {
						$data['order']['data'][] = array($i, (int)$query->row['total']);
					} else {
						$data['order']['data'][] = array($i, 0);
					}
				
					$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "customer` WHERE DATE(date_added) = '" . $this->db->escape($date) . "' GROUP BY DATE(date_added)");
			
					if ($query->num_rows) {
						$data['customer']['data'][] = array($i, (int)$query->row['total']);
					} else {
						$data['customer']['data'][] = array($i, 0);
					}
		
					$data['xaxis'][] = array($i, date('D', strtotime($date)));
				}
				
				break;
			default:
			case 'month':
				for ($i = 1; $i <= date('t'); $i++) {
					$date = date('Y') . '-' . date('m') . '-' . $i;
					
					$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "order` WHERE order_status_id > '0' AND (DATE(date_added) = '" . $this->db->escape($date) . "') GROUP BY DAY(date_added)");
					
					if ($query->num_rows) {
						$data['order']['data'][] = array($i, (int)$query->row['total']);
					} else {
						$data['order']['data'][] = array($i, 0);
					}	
				
					$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer WHERE DATE(date_added) = '" . $this->db->escape($date) . "' GROUP BY DAY(date_added)");
			
					if ($query->num_rows) {
						$data['customer']['data'][] = array($i, (int)$query->row['total']);
					} else {
						$data['customer']['data'][] = array($i, 0);
					}	
					
					$data['xaxis'][] = array($i, date('j', strtotime($date)));
				}
				break;
			case 'year':
				for ($i = 1; $i <= 12; $i++) {
					$query = $this->db->query("SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "order` WHERE order_status_id > '0' AND YEAR(date_added) = '" . date('Y') . "' AND MONTH(date_added) = '" . $i . "' GROUP BY MONTH(date_added)");
					
					if ($query->num_rows) {
						$data['order']['data'][] = array($i, (int)$query->row['total']);
					} else {
						$data['order']['data'][] = array($i, 0);
					}
					
					$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "customer WHERE YEAR(date_added) = '" . date('Y') . "' AND MONTH(date_added) = '" . $i . "' GROUP BY MONTH(date_added)");
					
					if ($query->num_rows) { 
						$data['customer']['data'][] = array($i, (int)$query->row['total']);
					} else {
						$data['customer']['data'][] = array($i, 0);
					}
					
					$data['xaxis'][] = array($i, date('M', mktime(0, 0, 0, $i, 1, date('Y'))));
				}			
				break;	
		} 
		
		$this->response->setOutput(json_encode($data));
	}
	
	public function login() {
		$route = '';
		
		if (isset($this->request->get['route'])) {
			$part = explode('/', $this->request->get['route']);
			
			if (isset($part[0])) {
				$route .= $part[0];
			}
			
			if (isset($part[1])) {
				$route .= '/' . $part[1];
			}
		}
		
		$ignore = array(
			'common/login',
			'common/forgotten',
			'common/reset'
		);	
					
		if (!$this->user->isLogged() && !in_array($route, $ignore)) {
			return $this->forward('common/login');
		}
		
		if (isset($this->request->get['route'])) {
			$ignore = array(
				'common/login',
				'common/logout',
				'common/forgotten',
				'common/reset',
				'error/not_found',
				'error/permission'
			);
						
			$config_ignore = array();
			
			if ($this->config->get('config_token_ignore')) {
				$config_ignore = unserialize($this->config->get('config_token_ignore'));
			}
				
			$ignore = array_merge($ignore, $config_ignore);
						
			if (!in_array($route, $ignore) && (!isset($this->request->get['token']) || !isset($this->session->data['token']) || ($this->request->get['token'] != $this->session->data['token']))) {
				return $this->forward('common/login');
			}
		} else {
			if (!isset($this->request->get['token']) || !isset($this->session->data['token']) || ($this->request->get['token'] != $this->session->data['token'])) {
				return $this->forward('common/login');
			}
		}
	}
	
	public function permission() {
		if (isset($this->request->get['route'])) {
			$route = '';
			
			$part = explode('/', $this->request->get['route']);
			
			if (isset($part[0])) {
				$route .= $part[0];
			}
			
			if (isset($part[1])) {
				$route .= '/' . $part[1];
			}
			
			$ignore = array(
				'common/home',
				'common/login',
				'common/logout',
				'common/forgotten',
				'common/reset',
				'error/not_found',
				'error/permission'		
			);			
						
			if (!in_array($route, $ignore) && !$this->user->hasPermission('access', $route)) {
				return $this->forward('error/permission');
			}
		}
	}	
}
?>