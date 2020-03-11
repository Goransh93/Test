
<?php

$config = array(
        'login' => array(
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'password',
                        'label' => 'Password',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required'
                )

             

        ),
        'article_rule' => array(
                array(
                        'field' => 'title',
                        'label' => 'Article Title',
                        'rules' => 'required'
                ),
                array(
                         'field' => 'body',
                         'label' => 'Article Body',
                         'rules' => 'required'
                ),

        )
);          










?>