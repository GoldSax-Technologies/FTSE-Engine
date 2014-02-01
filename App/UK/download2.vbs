dim filesys
Set filesys = CreateObject("Scripting.FileSystemObject") 
filesys.CreateTextFile "somefile.txt", True 
If filesys.FileExists("somefile.txt") Then
   filesys.DeleteFile "somefile.txt" 
End If 
Wscript.Echo "Like this?"

WScript.Echo("Hello")

Set fso = CreateObject ("Scripting.FileSystemObject") 
Set stdout = fso.GetStandardStream (1) 
Set stderr = fso.GetStandardStream (2) 
stdout.WriteLine "This will go to standard output."
stderr.WriteLine "This will go to error output." 