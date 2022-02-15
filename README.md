# Python Script .SQL to .CSV

## Usage
Just run `python sql_to_csv.py ./sql_filename [sql_table]` You can specify one table at a time or not specify one and the script will automatically check all tables and make the CSV file.

Example : - `python sql_to_csv.py example.sql inventaire`
          - `python sql_to_csv.py example2.sql`

## How It Works
The following SQL:

```sql
CREATE TABLE `table` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`item` varchar(300) NOT NULL,
`price` float(20),
PRIMARY KEY (`id`)
)

INSERT INTO `table` VALUES 
(0,'item_1', 7.90),
(1,'item_2', 2.50);
```
    
is turned into the following CSV:

    | id   | item   | price |
    | ---- |:------:| -----:|
    | 0    | item_1 | 7.90  |
    | 1    | item_2 | 2.50  |

SQL file need to be similar to the example one !

This script is made in Python 3 and works with pandas, make sure to install pandas with the following command : `pip install pandas`
You might need more libraries install to make it work (NOT most of the time !), if anything check your errors and install the plugin needed.

###### Made by Enzo Lemarchand.
