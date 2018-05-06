Feature: login valid

  Scenario: try login valid username and password
    Given Im on page "home_page"
    When I fill "krol" on "username"
        And I fill "123" on "password"
        And I press "button_login"
    Then I see page "login_valid"
        And I see "user_name_krol" in "header"
    
  
