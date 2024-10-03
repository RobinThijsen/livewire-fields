safepull:
	git stash
	git pull
	git stash pop

push:
	git add .
	git commit -m $(msg)
	git push
	git pull
