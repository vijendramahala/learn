# python data types
# str, int, float, bool, complex, list, tuple, range, dict, frozenset, bytes, bytearray, memoryview

a = "Hello World"
print(a)
print(type(a)) # str

a = 12
print(a)
print(type(a)) # int

a = 1.2
print(a)
print(type(a)) # float

a = 1j
print(a)
print(type(a)) # complex

a  = [10, 20, 30, 40]
print(a)
print(type(a)) # list

a = ("firstname", "secoundname", "theredname")
print(a)
print(type(a))

a = range(10)
print(a)
print(list(a))
print(type(a))  # range

a = False
print(a)
print(type(a)) # bool

a = {'name': "jhon", 'age': 20}
print(a)
print(type(a)) #dict

a = {"Maruti", 1967 ,"RJ89CA9878"}
print(a)
print(type(a)) #set

a = frozenset({"test1","test2", 'test3' })
print(a)
print(type(a)) # frozenset

# a = bytes(10)
# print(a)
# print(type(a)) #bytes

a = b"python is fine"
print(a)
print(type(a)) # bytes

a = bytearray(10)
print(a)
print(type(a)) # bytearray

a = memoryview(bytes(5))
print(a)
print(type(a)) #memoryview

a = None
print(type(a))



