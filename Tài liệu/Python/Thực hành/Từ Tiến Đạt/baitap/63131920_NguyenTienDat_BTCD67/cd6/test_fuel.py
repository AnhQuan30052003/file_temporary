from fuel import check_fuel
def test_three_quarters():
  assert check_fuel('3/4') == "75%"
def test_one_quarter():
  assert check_fuel('1/4') == "25%"
def test_full_or_empty():
  assert check_fuel('4/4') == 1
  assert check_fuel('0/4') == 0
