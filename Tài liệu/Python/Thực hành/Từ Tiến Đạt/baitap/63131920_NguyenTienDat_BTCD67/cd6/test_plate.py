from plate import is_valid
def test_start_by_alphabet():
  assert is_valid("ch9426") == True
def test_lenght():
  assert is_valid("c") == False
def test_has_special_char():
  assert is_valid("cs,50") == False