<?php
namespace Custom1\Mymodule2\Api;
/**
 * @api
 */
interface DemoInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getProfile();
     /**
     * set data
     * @param string[] $postdata
     * @return array
     */

    public function setCustomList($postdata);

}
