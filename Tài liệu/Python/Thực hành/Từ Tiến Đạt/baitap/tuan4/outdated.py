import datetime
import os
os.system('cls')
list_month = [
 "January",
 "February",
 "March",
 "April",
 "May",
 "June",
 "July",
 "August",
 "September",
 "October",
 "November",
 "December"
]
while True:
    date = input("Enter a date in the format MM/DD/YYYY or Month DD, YYYY: ")
    try:
        datetime.datetime.strptime(date, '%m/%d/%Y')
        month, day, year = map(int,date.split('/'))
        print(f"{year}-{month:02}-{day:02}")
        break
    except ValueError:
        try:
            datetime.datetime.strptime(date, '%B %d, %Y')
            month, day, year = map(str,date.split())
            if month.title() in list_month:
              for i in range(0, len(list_month)):
                if month.title() == list_month[i]:
                  month = i+1
                  break
            print(f"{year}-{month:02}-{int(day[:1]):02}")
            break
        except ValueError:
            print("Invalid date.")
        continue
          