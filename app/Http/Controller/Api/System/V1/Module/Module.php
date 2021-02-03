<?php declare(strict_types=1);

namespace App\Http\Controller\Api\System\V1\Module;


use App\Utils\Message;
use App\Utils\Sms\SendSms;
use ReflectionException;
use Swoft\Bean\Annotation\Mapping\Inject;
use Swoft\Bean\Exception\ContainerException;
use Swoft\Context\Context;
use Swoft\Http\Message\ContentType;
use Swoft\Http\Message\Request;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
use Swoft\Http\Server\Annotation\Mapping\Middleware;
use Swoft\Validator\Annotation\Mapping\Validate;


/**
 * Class InformationController
 * @since 2.0
 * @Controller(prefix="/admin/system/module")
 */

class Module
{
    /**
     * 模块数据库生成
     * @RequestMapping(route="create",method=RequestMethod::GET)
     * @param Response $response
     * @param Request $request
     */

    public function create(Response $response,Request $request)
    {
        //进入逻辑层处理
        $data = \Swoft::getBean('module')($response, $request, __FUNCTION__);
        if($data == true){
            return Message::returnMsg([
                'status' => 1
            ],'Success',Message::CODE_SUCCESS);
        }
    }


    /**
     * 获取模块列表
     * @RequestMapping(route="getlist",method=RequestMethod::GET)
     * @param Response $response
     * @param Request $request
     */
    public function getList(Response $response,Request $request)
    {
        //进入逻辑层处理
        $data = \Swoft::getBean('module')($response, $request, __FUNCTION__);
        if($data == true){
            return Message::returnMsg($data,'Success',Message::CODE_SUCCESS);
        }
    }

    /**
     * 编辑时获得本条数据信息
     * @RequestMapping(route="editfindmodule",method=RequestMethod::GET)
     * @param Response $response
     * @param Request $request
     */

    public function editFindModule(Response $response,Request $request)
    {
        //进入逻辑层处理
        $data = \Swoft::getBean('module')($response, $request, __FUNCTION__);
        if($data == true){
            return Message::returnMsg($data,'Success',Message::CODE_SUCCESS);
        }
    }

    /**
     * 编辑模块信息
     * @RequestMapping(route="editmodule",method=RequestMethod::GET)
     * @param Response $response
     * @param Request $request
     */
    public function editModule(Response $response,Request $request)
    {
        //进入逻辑层处理
        $data = \Swoft::getBean('module')($response, $request, __FUNCTION__);
        if($data == true){
            return Message::returnMsg($data,'Success',Message::CODE_SUCCESS);
        }
    }

    /**
     * 删除模块
     * @RequestMapping(route="deletemodule",method=RequestMethod::GET)
     * @param Response $response
     * @param Request $request
     */
    public function deleteModule(Response $response,Request $request)
    {
        //进入逻辑层处理
        $data = \Swoft::getBean('module')($response, $request, __FUNCTION__);
        if($data == true){
            return Message::returnMsg($data,'Success',Message::CODE_SUCCESS);
        }
    }

    /**
     * 获得模块配置文件
     * @RequestMapping(route="getmoduleconfig",method=RequestMethod::GET)
     * @param Response $response
     * @param Request $request
     */
    public function getModuleConfig(Response $response,Request $request)
    {
        //进入逻辑层处理
        $data = \Swoft::getBean('module')($response, $request, __FUNCTION__);
        if($data == true){
            return Message::returnMsg($data,'Success',Message::CODE_SUCCESS);
        }
    }





}