from twttr import shorten
def test_lower():
  assert shorten('WHAT IS YOUR NAME ?') == 'WHT S YR NM ?'
def test_no_error():
  assert shorten('cs50') == 'cs50'