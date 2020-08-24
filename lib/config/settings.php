<?php
return array(
    'ERIP_EXPRESSPAY_TOKEN' => array(
        'value'         => '',
        'title'         => 'Токен',
        'description'   => 'API-ключ производителя услуг',
        'control_type'  => 'input'
    ),
    'ERIP_EXPRESSPAY_SERVICEID' => array(
        'value'         => '',
        'title'         => 'Номер услуги',
        'description'   => 'Номер услуги в системе express-pay.by',
        'control_type'  => 'input'
    ),
    'ERIP_EXPRESSPAY_SECRET_WORD' => array(
        'value'         => '',
        'title'         => 'Секретное слово',
        'description'   => 'Секретное слово используется для формирования цифровой подписи',
        'control_type'  => 'input'
    ),
    'ERIP_EXPRESSPAY_INFO' => array(
        'value'         => '',
        'title'         => 'Описание заказа',
        'description'   => 'Описание заказу будет отображаться при оплате в системе ЕРИП',
        'control_type'  => 'help'
    ),
    'ERIP_EXPRESSPAY_TESTMODE' => array(
        'value'         => false,
        'title'         => 'Тестовый режим',
        'description'   => '',
        'control_type' => 'checkbox'
    ),
    'ERIP_EXPRESSPAY_SUCCESS_URL' => array(
        'value'         => '',
        'title'         => 'SUCCESS_URL',
        'description'   => 'Оставить пустым, если не требуется доп. данных на checkout/success',
        'control_type'  => 'input'
    ),
);