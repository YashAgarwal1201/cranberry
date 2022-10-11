"""
Program to create a new directory and a text file in it along with some content, then rename that file 
and then delete the directory along with the file just created.
"""

from msilib import Directory
import os


def main():
    directory = './Example Folder/'
    fileName = directory + 'Example File.txt'

    # delete the old directory and its content (if any)
    if(os.path.isdir(directory)):
        directoryFiles = os.listdir(directory)
        for i in range(0, len(directoryFiles)):
            os.remove(directory + directoryFiles[i])
        os.rmdir(directory)
        print('old Directory Deleted')
    
    # create a new directory
    os.mkdir(directory)
    print('\nNew Directory Created')

    if(os.path.isdir(directory)):
        # create a new text file with some content
        filePointer = open(fileName, 'a+')  # x for empty file
        filePointer.write('a very long content.')
        filePointer.close()
        print('file created')

        # rename the newly created file
        newFileName = directory + 'new Example File.txt'
        os.rename(fileName,newFileName)

        # remove the file and then directory
        os.remove(newFileName)    # delete file (optional)
        os.rmdir(directory)    # delete directory (optional)
    

if __name__ == '__main__':
    main()