<?php
/**
 * Our class name should follow the directory structure of
 * our Observer.php model, starting from the namespace,
 * replacing directory separators with underscores.
 * i.e. app/code/local/BonHills/BrowserOSNameFinder/Model/Observer.php
 */
class BonHills_BrowserOSNameFinder_Model_Observer {
	/**
	 * Magento passes a Varien_Event_Observer object as
	 * the first parameter of dispatched events.
	 */
	public function extendBodyClass(Varien_Event_Observer $observer) {
		$block = $observer->getBlock ();
		$admin_also = FALSE;
		
		//echo get_class($block)."--->" .get_class( $block->getParentBlock())."<br/>";
		if(Mage::getStoreConfig('bf_menu/bf_general/bf_admin_also')){
			$admin_also = (get_class ( $block ) == 'Mage_Adminhtml_Block_Page');
		}
				
		if (get_class ( $block ) == 'Mage_Page_Block_Html' || $admin_also) {
			// $block->addBodyClass ( Mage::app ()->getStore ()->getCode () );
			$helper = Mage::helper ( 'browserosnamefinder' );
			$browser_name = Mage::getStoreConfig('bf_menu/bf_general/bf_browser_name');
			$os_name = Mage::getStoreConfig('bf_menu/bf_general/bf_os_name');
			$block->addBodyClass ( empty($browser_name) ? 'browser' : $browser_name . '-' . $helper->slugify ( $helper->getBrowser () ) );
			$block->addBodyClass ( empty($os_name) ? 'os' : $os_name . '-' . $helper->slugify ( $helper->getPlatform () ) );
		}
	}
	
}
?>	