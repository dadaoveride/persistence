To find the Persistence of an Integer n, take the digits of n, multiply them together to get a new integer m, and if m has more than one digit, repeat the process until you are left with a one digit number. The number of repetitions needed is the Persistence of n.

I was given this exercise at an interview recently, and unfortunately did not pass the exercise given the time alloted. I spent the weekend debugging the code and got it to work. Thnking back, I should have made an initial commit with the bad code and incremented commits to demonstrate the troubleshooting process.

First, complicated variable names without a linter make catching typos incredibly difficult.
Second, lack of familiarity with fundamental structures in PHP meant I missed a few crucial conversions to get the code to work.

I was also stuck in Python mode, which is why the type tracing wasn't obvious to me. Combined with a lack of a console and errors to trace, an hour proved far too short to get this code to work.
