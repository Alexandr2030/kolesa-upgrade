<?php
namespace Page;

class Card
{
    /** 
     * Локатор кнопки "Payment Method"
     */
    public static $radio_button_card = '#input_32_paymentType_credit';

    /**
     * Локатор поля "First Name" в карточках
     */
    public static $first_name_field_card = '#input_32_cc_firstName';

    /**
     * Локатор поля "Last Name" в карточках
     */
    public static $last_name_field_card = '#input_32_cc_lastName';

     /**
      * Локатор поля "Credit Card Number" в карточках
      */
    public static $card_number_field = '#input_32_cc_number';
    
    /**
     * Локатор поля "Security Code" в карточках
     */
    public static $security_code_field = '#input_32_cc_ccv';

    /**
     * Локатор dropdown месяцев
     */
    public static $expiration_month_dropdown = '#input_32_cc_exp_month';

    /**
     * Локатор месяца Январь
     */
    public static $month_january = '#input_32_cc_exp_month > option:nth-child(2)';

    /**
     *  Локатор Expiration Year 
     */
    public static $expiration_year_dropdown = '#input_32_cc_exp_year';

    /**
     * Локатор выбора года 2021
     */
    public static $year_2021 = '#input_32_cc_exp_year > option:nth-child(2)';

    /**
     * Локатор Street Address 
     */
    public static $address_field_card = '#input_32_addr_line1';

    /**
     * Локатор города в картах
     */
    public static $city_field_card = '#input_32_city';

    /**
     * Локатор штата/региона
     */
    public static $state_province_field_card = '#input_32_state';

    /**
     * Локатор индекса
     */
    public static $postal_field_card = '#input_32_postal';

    /**
     * Локатор дроп формы страны в картах
     */
    public static $country_dropdown = '#input_32_country';

    /**
     * 
     */
    public static $country_dropdown_USA = '#input_32_country > option:nth-child(2)';
}
    
