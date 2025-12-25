x = 2
y = "i am learning python just day"

print(x)
print(y)

# You can gat the data type of a variable with the type() function.
print(type(x))
print(type(y))

#python allows to assign values to multiple variables in one line

car, model, number = "Maruti", 2019, "RJ78ML8987"

print(car)
print(model)
print(number)

print(car, model, number)

# one values to multiple variables
# and can assign the same value to multiple variables in one line

variable1 = variable2 = variable3 = "Hellow"

print(variable1, variable2, variable3)
print(variable2)
print(variable3)

# unpack collection
#have a collection of values in a list, tuple etc. Python allows you to extract the values into variable .
# This IS CALLED unpack

cars = ["Maruti", "Rolls-Royce", "Bentley"]

maruti, rollsroyce, bentley  = cars

print(maruti, rollsroyce, bentley)
print(rollsroyce)
print(bentley)

# globle variable
# Variables that are created outside of a function are known as global variables.

model = 1969

def mycar():
    print("car name Mustang and model" , model)

mycar()

# create a variable inside a function with the same name as the global variable

student = "Boy"

def mystudent():
    student = "Girl"
    print("This is a " + student)

mystudent()

print("This is a " + student)

# Normally, when i create a variable inside a function, that variable is local, and can only be used inside that function.
# To create a global variable inside a function, you can use the global keyword.

def mycode():
    global code
    code = "PYTHON"
mycode()

print("code is " + code)