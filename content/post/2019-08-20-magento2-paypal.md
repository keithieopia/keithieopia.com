+++
title = "Magento 2 & PayPal"
date = "2019-08-20"
+++

If you're setting up a new Magento 2 webstore with a new PayPal account as your payment processor, you'll probably run into this bug: a zero dollar charge in PayPal Payflow (manager.paypal.com) that was processed successfully, zero dollars regardless of the actual sale price. In Magento, it will say payment declined, even though PayFlow shows the payment (of zero dollars) was approved.
<!--more-->

I couldn't find any documentation on this issue, so I'm posting it here for others: you need to call PayPal customer service and they'll enable a setting on their end for your account. Fortunately, PayPal has it documented internally and the account needs to be fixed for both PayFlow and regular paypal.com. There isn't anything you personally can do to fix the issue.

Turnaround time to fix the setting is usually around 3 business days at the most.

Assuming you haven't setup PayPal in Magento, first it's recommended to create a new user in manager.paypal.com with the API role as it's default. After the new account has been setup in PayPal, login to your Magento store's admin panel and navigate to //Stores &rarr; Sales &rarr; Payment Methods//.

There's a lot of different PayPal account types available for setup in Magento: //Payments Advanced, Pro,// and //Standard// as well as //PayFlow Pro// and //PayFlow Link//. In our case we use Payflow, but //Payments Pro// was the correct setting Magento needed setup (confusing, no?).

Even more confusing is the terminology and order for PayPal account credentials in Magento:

  * "Partner" is almost always going to be "PayPal" for most people
  * What Magento calls "Vendor" is actually called "Merchant Login" in PayPal
  * "User" and "Vendor" is out-of-order in Magento compared to Payflow's login. User comes first, but it's the 3rd field in manager.paypal.com

If you're credentials are correct, you can do a test purchase in Magento. You'll then hit the bug described at the beginning of this saga, but you should see the zero dollar charge in PayPal, meaning that Magento and PayPal are at least communicating with each other. 
