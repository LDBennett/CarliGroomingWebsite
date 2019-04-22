var feed = new Instafeed({
		get: 'user',
		userId: 21292005,
		accessToken: '21292005.1677ed0.43ee3421bef543c09c0d977b1be83961',
        links: true,
        limit: 12,
        sortBy: 'most-recent',
        resolution: 'standard_resolution',
        template: '<div class="col-sm-4"><div class="panel panel-default"><div class="panel-body"><a href="{{link}}" target="_blank"><img class="img-responsive img-round-custom" src="{{image}}"/></a></div><div class="panel-footer">{{caption}}</div></div></div>',
        filter: function(image) {
          return image.tags.indexOf('groomersofinstagram') >= 0;
        }
      });
      feed.run();