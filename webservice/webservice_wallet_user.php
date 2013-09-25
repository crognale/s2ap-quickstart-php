<?php
/**
 * Copyright 2013 Google Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use $this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * Class to get and set user details.
 */
class WebserviceWalletUser {

  /**
   * @var String $firstName The user's first name..
   */
  private $firstName;

  /**
   * @var String $middleName The user's middle name..
   */
  private $middleName;

  /**
   * @var String $lastName The user's last name.
   */
  private $lastName;

  /**
   * @var String $streetAddress The user's street address.
   */
  private $streetAddress;

  /**
   * @var String $city The user's city.
   */
  private $city;

  /**
   * @var String $state TThe user's two letter abbreviation for state.
   */
  private $state;

  /**
   * @var String $zipcode The user's zip code in either 5 digit or 9 digit
   * format.
   */
  private $zipcode;

  /**
   * @var String $country The user's letter abbreviation for country.
   */
  private $country;

  /**
   * @var String $email The user's email address.
   */
  private $email;

  /**
   * @var String $phone The user's phone number.
   */
  private $phone;

  /**
   * @var String $gender The user's gender.
   */
  private $gender;

  /**
   * @var String $birthday The user's birthday. The value will be in YYYYMMDD
   * format.
   */
  private $birthday;

  /**
   * @return String firstName user's first name.
   */
  public function getFirstName() {
    return $this->firstName;
  }

  /**
   * @param String $firstName set user's first name.
   */
  public function setFirstName($firstName) {
    $this->firstName = $firstName;
  }

  /**
   * @return String user's middleName .
   */
  public function getMiddleName() {
    return $this->middleName;
  }

  /**
   * @param String $middleName set user's middle name.
   */
  public function setMiddleName($middleName) {
    $this->middleName = $middleName;
  }

  /**
   * @return String lastName user's last name.
   */
  public function getLastName() {
    return $this->lastName;
  }

  /**
   * @param String $lastName set user's last name.
   */
  public function setLastName($lastName) {
    $this->lastName = $lastName;
  }

  /**
   * @return String StreetAddress user's street address.
   */
  public function getStreetAddress() {
    return $this->streetAddress;
  }

  /**
   * @param String $streetAddress set user's street address.
   */
  public function setStreetAddress($streetAddress) {
    $this->streetAddress = $streetAddress;
  }

  /**
   * @return String city user's city.
   */
  public function getCity() {
    return $this->city;
  }

  /**
   * @param String $city set user's city.
   */
  public function setCity($city) {
    $this->city = $city;
  }

  /**
   * @return String state user's state.
   */
  public function getState() {
    return $this->state;
  }

  /**
   * @param String $state set user's state.
   */
  public function setState($state) {
    $this->state = $state;
  }

  /**
   * @return String zipcode user's zipcode.
   */
  public function getZipcode() {
    return $this->zipcode;
  }

  /**
   * @param String $zipcode set user's zipcode.
   */
  public function setZipcode($zipcode) {
    $this->zipcode = $zipcode;
  }

  /**
   * @return String country user's country.
   */
  public function getCountry() {
    return $this->country;
  }

  /**
   * @param String $country set user's country.
   */
  public function setCountry($country) {
    $this->country = $country;
  }

  /**
   * @return String email user's email.
   */
  public function getEmail() {
    return $this->email;
  }

  /**
   * @param String $email set user's email.
   */
  public function setEmail($email) {
    $this->email = $email;
  }

  /**
   * @return String phone uset's phone.
   */
  public function getPhone() {
    return $this->phone;
  }

  /**
   * @param String $phone set user's phone.
   */
  public function setPhone($phone) {
    $this->phone = $phone;
  }

  /**
   * @return String gender user's gender.
   */
  public function getGender() {
    return $this->gender;
  }

  /**
   * @param String $gender set user's gender.
   */
  public function setGender($gender) {
    $this->gender = $gender;
  }

  /**
   * @return String birthday user's birthday.
   */
  public function getBirthday() {
    return $this->birthday;
  }

  /**
   * @param String $birthday set user's birthday.
   */
  public function setBirthday($birthday) {
    $this->birthday = $birthday;
  }

  /**
   * @return Array userModifiedFields.
   */
  public function getUserModifiedFields() {
    return $this->userModifiedFields;
  }

  /**
   * @param Array $userModifiedFields set user modified fields.
   */
  public function setUserModifiedFields(array $userModifiedFields) {
    $this->userModifiedFields = $userModifiedFields;
  }
}