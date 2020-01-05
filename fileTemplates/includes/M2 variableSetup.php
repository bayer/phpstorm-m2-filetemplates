#set ($cutStart = $DIR_PATH.indexOf("app/code/") + 9)
#set ($vendor = $DIR_PATH.substring($cutStart).split('/')[0])
#set ($module = $DIR_PATH.substring($cutStart).split('/')[1])
#set ($ModuleName = "${vendor}_${module}")