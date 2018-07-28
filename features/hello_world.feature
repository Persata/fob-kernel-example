Feature: Viewing the greeter text on the homepage

    Scenario:
        Given the greeter should say "Bonjour World!"
        When I am on the homepage
        Then I should see text matching "Bonjour World!"
