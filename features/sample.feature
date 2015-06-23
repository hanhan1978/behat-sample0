# language: en

Feature: Do Some Sample Testing 

  Scenario: ls 
    Given I am in the "directory"
    When I execute "command" 
    Then I should get "file1,file2" 

