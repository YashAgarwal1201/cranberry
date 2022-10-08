
"""
Renaming files
"""

import os

def main():
    # to rename a file
    folder = "F:\\server\\htdocs\\Ibrat\\"
    if(os.path.isdir(folder)):
        oldName = folder + 'newfile.txt'
        newName = folder + 'anyrandomname.txt'
        os.rename(oldName, newName)

    # to rename multiple files with similar name
    folder = 'F:\\server\\htdocs\\Ibrat\\Experiment Folder\\'
    if(os.path.isdir(folder)):
        listName = os.listdir(folder)
        if(listName):
            for i in range (0,len(listName)):
                oldName = folder + listName[i]
                newName = folder + 'anyNewName' + str(i) + '.txt'
                os.rename(oldName, newName)

if __name__ == '__main__':
    main()