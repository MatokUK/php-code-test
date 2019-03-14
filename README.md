# Funeral Zone PHP Code Test 

You need to refactor this class, it is a simple class that makes a call to a http API to retrieve a list of books and return them. Think about extensibility - how could you easily add other book seller APIs in the the future, handle different API formats, different query types (by publisher, by year published etc - things like that). 

Refactor this to what you consider to be production ready code.

## Getting started
Simply fork this repository and commit and push your changes to yor fork.

## Solution
Just check the files. 

What I don't understand is possibility to change format of API response. My opinion is that response format is not important and what important is - how I use this response in the code, thus, I really on JSON (as API response) that can be converted in anything else...

API format matters only in case of completely different API (XML), but in this case it can returns different XML schema (with different node names and/or nesting). I don't this it's clever to think about some kind of "silver bullet" solution.