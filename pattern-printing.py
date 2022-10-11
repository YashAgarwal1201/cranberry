"""
pattern printing
"""

def main():
    # pattern 1
    for i in range (0,5):
        for j in range(i,5):
            print(' * ',end='')
        print('\n')
    print('\n')

    # pattern 2
    for i in range (0,5):
        for j in range (0, i+1):
            print(' * ',end='')
        print('\n')
    print('\n')

    # pattern 3
    for i in range (0,5):
        for j in range (i,5):
            print(' ',i,' ',end='')
        print('\n')
    print('\n')

    # pattern 4
    for i in range (0,5):
        for j in range (i,5):
            print(' ',j,' ',end='')
        print('\n')
    print('\n')

    # pattern 5
    for i in range (0,5):
        for j in range (0,i+1):
            print(' ',i,' ',end='')
        print('\n')
    print('\n')

    # pattern 6
    for i in range (0,5):
        for j in range (0,i+1):
            print(' ',j,' ',end='')
        print('\n')
    print('\n')

    # pattern 7
    for i in range (0,5):
        for j in range (i,5):
            print('   ',end='')
        for k in range (0,i+1):
            print(' * ',end='')
        print('\n')
    print('\n')

    # pattern 8
    for i in range (0,5):
        for j in range (0,i):
            print('   ',end='')
        for k in range (i,5):
            print(' * ',end='')
        print('\n')
    print('\n')

    # pattern 9
    for i in range (0,5):
        for j in range(0,5):
            print(' * ',end='')
        print('\n')
    print('\n')

if __name__ == '__main__':
    main()