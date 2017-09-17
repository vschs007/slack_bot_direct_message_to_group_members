controller.on('slash_command', function (bot, message) {
    bot.api.channel.info({
        channel: 'C1928309' // Specific channel you refer
    }, function (err, results) {
        if (results.ok && results.ok === true) {
            var members = results.members;

            for (var index = 0; index < members.length; index++) {
                var member = members[index];

                bot.startPrivateConversation({
                    user: member
                }, function (err, convo) {
                    if (!err && convo) {
                        convo.say('Hello there! I messaged you because you where in the channel #general');
                    }
                });
            }
        }
    });
});
