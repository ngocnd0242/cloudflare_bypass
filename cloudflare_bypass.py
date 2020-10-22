import cfscrape
import sys
scraper = cfscrape.create_scraper()
print scraper.get(sys.argv[1]).content