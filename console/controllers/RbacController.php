<?php
namespace  console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller{

    public function actionInit(){

        $auth = \Yii::$app->authManager;

        // Thêm quyền
        //Xem List
       // $indexPost = $auth -> createPermission('index-post');
      //  $indexPost->description= 'Xem danh sách';
       // $auth->add($indexPost);
        // Xem detail
      //  $viewPost = $auth -> createPermission('view-post');
       // $viewPost->description= 'Xem detail';
      //  $auth->add($viewPost);
        //Tạo
     //   $createPost = $auth -> createPermission('create-post');
       // $createPost->description= 'Tạo bài viết';
        //$auth->add($createPost);

        // Sửa
      //  $updatePost = $auth -> createPermission('update-post');
       // $updatePost->description= 'Sửa danh sách';
      //  $auth->add($updatePost);
        // Xóa
       // $deletePost = $auth -> createPermission('delete-post');
       // $deletePost->description= 'Xóa danh sách';
       // $auth->add($deletePost);
        $uploadPost = $auth -> createPermission('upload-post');
        $uploadPost->description = 'Thành viên đăng bài';
        $auth->add( $uploadPost);
        //  Thêm rule

      //  $adminManager = $auth->createRole('admin');
      //  $auth->add($adminManager);
        $postManager = $auth->createRole('post');
        $auth->add( $postManager);
        // Gán nhóm quyền
        $auth->addChild($postManager,$uploadPost);
       // $auth->addChild($adminManager,$indexPost);
      //  $auth->addChild($adminManager,$updatePost);
      //  $auth->addChild($adminManager,$createPost);
     //   $auth->addChild($adminManager,$deletePost);
     //   $auth->addChild($adminManager,$viewPost);

       // $auth->assign($adminManager,1);
        $auth->assign($postManager,3);
       // $auth->assign($adminManager,1);
    }
}