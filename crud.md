# Adventures in creating a CRUD Serverless Application

## Research
Google "aws tutorial build crud api lambda" and get https://docs.aws.amazon.com/apigateway/latest/developerguide/http-api-dynamo-db.html
Read through - no authentication :-(

The tutorial links to API Gateway doc and find https://docs.aws.amazon.com/apigateway/latest/developerguide/api-gateway-tutorials.html which 
contains links to Workshops including [Build a serverless web application](https://webapp.serverlessworkshops.io/) 

OK - start to follow that document

Now this is going to start costing money - go to [Billing](https://console.aws.amazon.com/billing/home?region=ap-southeast-2#/) and put
in a budget of $10/month and alert on 50% of that budget

Do I need a domain? What's the cheapest? [Route53 pricing for domain registration](https://docs.aws.amazon.com/Route53/latest/DeveloperGuide/registrar-tld-list.html) is
 in a PDF with a YYYMMDD from 2014 🙄 https://d32ze2gidvkk54.cloudfront.net/Amazon_Route_53_Domain_Registration_Pricing_20140731.pdf even though internal
 text says "as of June 25, 2021". Can this information be retrieved via an API?
 
```
➜  aws wget https://d32ze2gidvkk54.cloudfront.net/Amazon_Route_53_Domain_Registration_Pricing_20140731.pdf
➜  aws grep '\$' Amazon_Route_53_Domain_Registration_Pricing_20140731.txt | head
    ac                     $48.00       $48.00         $48.00           $0.00     No change
    academy                $12.00        $0.00         $83.00          $30.00     Renewed with transfer
    accountants            $94.00        $0.00        $145.00          $94.00     Renewed with transfer
    adult                 $100.00        $0.00        $160.00         $100.00     Renewed with transfer
    agency                 $19.00        $0.00         $73.00          $19.00     Renewed with transfer
    apartments             $47.00        $0.00        $100.00          $47.00     Renewed with transfer
    associates             $29.00        $0.00         $83.00          $29.00     Renewed with transfer
    auction                $29.00        $0.00         $83.00          $29.00     Renewed with transfer
    audio                 $13.00*        $0.00    Not supported   Not supported   Not supported

➜  aws grep '\$' Amazon_Route_53_Domain_Registration_Pricing_20140731.txt | sed -e 's/[\$|\*]//g' | head
    ac                     48.00       48.00         48.00           0.00     No change
    academy                12.00        0.00         83.00          30.00     Renewed with transfer
    accountants            94.00        0.00        145.00          94.00     Renewed with transfer
    adult                 100.00        0.00        160.00         100.00     Renewed with transfer
    agency                 19.00        0.00         73.00          19.00     Renewed with transfer
    apartments             47.00        0.00        100.00          47.00     Renewed with transfer
    associates             29.00        0.00         83.00          29.00     Renewed with transfer
    auction                29.00        0.00         83.00          29.00     Renewed with transfer
    audio                 13.00        0.00    Not supported   Not supported   Not supported
    band                   22.00        0.00         76.00          22.00     Renewed with transfer
    
➜  aws grep '\$' Amazon_Route_53_Domain_Registration_Pricing_20140731.txt | sed -e 's/[\$|\*]//g' | sort -n --key=2 | head
    click                   5.00       0.00        48.00          10.00     Renewed with transfer
    link                    5.00       0.00       51.00        10.00   Renewed with transfer
    me.uk                   8.00       0.00        8.00         0.00   No change
    be                       9.00       9.00         19.00           9.00     Renewed with transfer
    co.uk                   9.00       0.00         9.00           0.00     No change
    de                      9.00       0.00         9.00            9.00 Renewed with transfer
    name                    9.00       0.00       64.00         9.00   Renewed with transfer
    org.uk                  9.00       0.00        9.00         0.00   No change
    uk                         9.00       0.00           9.00         0.00   No change
    es                    10.00       10.00        10.00            0.00 No change
```
Ok - .click or .link if we need it
https://lettersolver.com/words-for/_/words-end-in/LINK/?dictionary=all_en
https://lettersolver.com/words-for/_/words-end-in/CLICK/?dictionary=all_en
